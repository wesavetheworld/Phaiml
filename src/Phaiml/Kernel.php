<?php
namespace Phaiml;

class Kernel
{

    public function learn(String $aiml_file_path) : bool { return true;}

    public function response(String $question, $session_id = null) : String { return "Hello User!"; }

    public function bootstrap(String $brain_file_path) : bool { return true;}

    public function saveBrain(String $brain_file_path) : bool { return true;}

    public function setPredicate(String $term, String $predicate, $session_id=null) : bool { return true;}

    public function getPredicate(String $term, $session_id=null) : String { return "Brandy";}
}