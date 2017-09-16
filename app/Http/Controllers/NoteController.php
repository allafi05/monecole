<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\repositories\NoteRepository;
use App\repositories\EtudiantRepository;
use App\Http\Requests\NoteRequest;
use App\Etudiant;
use App\Note;

class NoteController extends Controller
{
    protected $repository; 
    protected $etudiant_repository; 
    protected $nbrPerPage = 5; 

    public function __construct(NoteRepository $repository, EtudiantRepository $rep)     
    { 
        $this->middleware('auth');
        $this->middleware('admin', ['only' => 'destroy']);
        $this->repository = $repository;     
        $this->etudiant_repository = $rep; 
    }
  
    public function index($id_etudiant, $id)
    {
        $notes = $this->repository->getPaginate($this->nbrPerPage, $id_etudiant); 
        $etudiant = $this->etudiant_repository->getById($id_etudiant);
        $links = $notes->render(); 
        if($id == 0){
            $nte = new Note();
        }
        else{
            $nte = $this->repository->getById($id);
        }
        return view('etudiant.list_notes', compact('notes', 'nte', 'etudiant', 'links', 'id_etudiant')); 
    }

    public function store(NoteRequest $request, $id_etudiant)
    {
        $note = $this->repository->store($request->all(), $id_etudiant);
        return redirect('note/'.$id_etudiant.'/0')->withOk("Note  ajoutée !");
    }

    public function update(NoteRequest $request, $id)
    {
        $note = $this->repository->update($id, $request->all()); 
        return redirect('note/'.$note->etudiant_id.'/0')->withOk("Note  modifiée !");
    }

    public function destroy($id)
    {
        $note = $this->repository->getById($id);
        $this->repository->destroy($id); 
        return redirect('note/'.$note->etudiant_id.'/0')->withOk("la note a été supprimée !"); 
    }
}
