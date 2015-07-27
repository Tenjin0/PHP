<?php 
class Membre{

	private $pseudo;
	private $prenom;
	private $nom;
	private $email;
	private $actif;

	public function __construct($p=null){
		$this->pseudo=$p;
		echo "Creation d'un membre\n";
	}

	public function getPseudo(){
		return $this->pseudo;
	}

	public function setPseudo($pseudo){
		$this->pseudo = $pseudo;
	}

}

$membre = new Membre("Tenji");
print_r($membre);
// $membre->setPseudo("Tenji");
?>