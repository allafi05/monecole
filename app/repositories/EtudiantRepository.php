<?php 
namespace App\repositories; 
use App\Etudiant; 
use App\User; 
class EtudiantRepository {    

	protected $etudiant;     

	public function __construct(Etudiant $etudiant) { 
		$this->etudiant = $etudiant; 
	} 

	private function save(Etudiant $etudiant, Array $inputs) { 
		$etudiant->matricule = $inputs['matricule']; 
		$etudiant->prenom = $inputs['prenom']; 
		$etudiant->nom = $inputs['nom']; 
		$etudiant->sexe = $inputs['sexe']; 
		$etudiant->lieu_naissance = $inputs['lieu_naissance']; 
		$etudiant->nationalite = $inputs['nationalite']; 
		$etudiant->adresse = $inputs['adresse']; 
		$etudiant->email = $inputs['email']; 
		$etudiant->telephone = $inputs['telephone']; 
    	$etudiant->date_naissance = date('Y-m-d', strtotime($inputs['date_naissance']));

		$etudiant->save(); 
	} 

	public function getPaginate($n) { 
		return $this->etudiant->paginate($n); 
	} 

	public function store(Array $inputs) { 
		$etudiant = new $this->etudiant; 
		$this->save($etudiant, $inputs, 0); 
		return $etudiant; 
	} 

	public function getById($id) { 
		return $this->etudiant->findOrFail($id); 
	} 

	public function update($id, Array $inputs) { 
		$etudiant = $this->getById($id); 
		$this->save($etudiant, $inputs); 
		return $etudiant; 
	} 

	public function destroy($id) { 
		$etudiant = $this->getById($id)->delete(); 
		return $etudiant;
	} 


}
