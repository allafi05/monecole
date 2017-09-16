<?php 
namespace App\repositories; 
use App\Note; 

class NoteRepository {    

	protected $note;     

	public function __construct(Note $note) { 
		$this->note = $note; 
	} 

	private function save(Note $note, Array $inputs) { 
		$note->matiere = $inputs['matiere']; 
		$note->coeficient = $inputs['coeficient']; 
		$note->note = $inputs['note'];
		$note->save(); 
	} 

	public function getPaginate($n, $id_etudiant) { 
		$notes = $this->note->where('etudiant_id', $id_etudiant)->paginate($n); 
		$notes->load('etudiant');
		return $notes;
	} 

	public function store(Array $inputs, $id_etudiant) { 
		$note = new $this->note; 
		$note->etudiant_id = $id_etudiant;
		$this->save($note, $inputs); 
		return $note; 
	} 

	public function getById($id) { 
		$note = $this->note->findOrFail($id); 
		$note->load('etudiant');
		return $note;
	} 

	public function update($id, Array $inputs) { 
		$note = $this->getById($id); 
		$this->save($note, $inputs); 
		return $note;    
	} 

	public function destroy($id) { 
		$note = $this->getById($id)->delete(); 
		return $note;
	} 


}
