<?PHP

class EventSource
{
	public function __construct(){
		header("Content-Type: text/event-stream\n\n");
	}
	
	public sendEvent($type,$data){
	  echo "event: $type\n";
	  echo 'data: '.json_encode( $data );
	  echo "\n\n";
	}

}


?>