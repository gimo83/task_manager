<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
	protected $table = "user";

	protected static $events =[
		'retrieved' => UserModel::class."::onRetrieved",
		'saveing'=>UserModel::class.'::onSaving'
	];


	public static function boot()
	{
		parent::boot();

		foreach(static::getModelEvents() as $event) {
            static::$event(function($item) use ($event){
                $method = static::$events[$event];
                $method($item);
            });
        }

	}

	 /**
     * Retrieve events the model needs listeners for.
     *
     * @return array
     */
    protected static function getModelEvents()
    {
        if (isset(static::$modelEvents)){
            //if a model needs fewer events available to SavesItem, define in that model's $modelEvents array.
            return static::$modelEvents;
        }
        return [
            'retrieved','created', 'deleted', 'updating', 'saving'
        ];
    }



	public function buildUri()
	{
		$this->uri = 'api/user/'.$this->id ;
	}

	public function onRetrieved($item)
	{
		$item->buildUri();
	}

	public function onSaveing($item)
	{

	}

	
}