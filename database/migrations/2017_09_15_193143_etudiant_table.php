<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Etudiant; 

class EtudiantTable extends Migration
{
   
    public function up()
    {
        Schema::create('etudiants', function(Blueprint $table) { 
            $table->increments('id'); 
            $table->string('matricule', 100);   
            $table->string('prenom', 100);  
            $table->string('nom', 100);  
            $table->string('date_naissance', 100);  
            $table->string('lieu_naissance', 100);  
            $table->string('sexe', 10);  
            $table->string('nationalite', 25);  
            $table->string('adresse', 100);  
            $table->string('email', 100);  
            $table->string('telephone', 20);  
            $table->timestamps();  
            $table->boolean('deleted', 100);    
        });

        Schema::table('notes', function(BluePrint $table){
            $table->integer('etudiant_id')->unsigned()->index();
        });

        for ($i = 0; $i < 10 ; $i++) { 
            Etudiant::create([
                'matricule'=> '00'.$i, 
                'prenom' => "Ousmane",
                'nom' => "Diop",
                'date_naissance' => '2001-11-01';
                'lieu_naissance' => "Dakar",
                'sexe' => "Masculin",
                'nationalite' => "Sénégalaise",
                'adresse' => "Médina",
                'email' => "ousmane".$i."@ecole.sn",
                'telephone' => "70730604".$i,
                'deleted' => false
            ]);
        }
    }

    public function down()
    {
        Schema::drop('etudiants');
    }
}
