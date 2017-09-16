<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EtudiantRequest;
use App\repositories\EtudiantRepository;
use App\repositories\NoteRepository;
use App\Etudiant;
use App\Note;
use Intervention\Image\Facades\Image;
class EtudiantController extends Controller
{
    protected $repository; 
    protected $ote_repository; 
    protected $nbrPerPage = 5; 

    public function __construct(EtudiantRepository $repository, NoteRepository $note_repository)     
    { 
        $this->middleware('auth');
        $this->middleware('admin', ['only' => 'destroy']);
        $this->repository = $repository;     
        $this->note_repository = $note_repository;    
    }
  
    public function index()
    {
        $etudiants = $this->repository->getPaginate($this->nbrPerPage); 
        $links = $etudiants->render(); 
        return view('etudiant.list', compact('etudiants', 'links')); 
    }

    public function create()
    {
        $etudiant = new Etudiant();
        return view('etudiant.edit0', compact('etudiant'));
    }

    public function store(EtudiantRequest $request)
    {
        $etudiant = $this->repository->store($request->all());
        return view('etudiant.edit3', compact('etudiant')); 
    }

    public function show($id)
    {
        $etudiant = $this->repository->getById($id); 
        $notes = $this->note_repository->getPaginate($this->nbrPerPage, $id);
        return view('etudiant.show',  compact('etudiant', 'notes')); 
    }

    public function edit($id)
    {
        $etudiant = $this->repository->getById($id); 
        return view('etudiant.edit0',  compact('etudiant')); 
    }

    public function update(EtudiantRequest $request, $id)
    {
        $etudiant = $this->repository->update($id, $request->all()); 
        return redirect('etudiant')->withOk("Etudiant modifié avec succes !");
    }

    public function upload(Request $request, $id)
    {
        if($request->hasFile('featured_image')){
            $image = $request->file('featured_image');
            $filename = $id;
            $location = public_path('images/etudiant/'.$filename);
            Image::make($image)->save($location);
        }
        return redirect('etudiant')->withOk("Opération terminée avec succes ! id = ".$id);
    }

    public function destroy($id)
    {
        $etudiant = $this->repository->getById($id);
        $this->repository->destroy($id); 
        return redirect('etudiant')->withOk("l'etudiant " . $etudiant->prenom . " " . $etudiant->nom . " a été supprimé avec succes !"); 
    }
}
