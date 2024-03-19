<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
/**
 * Class Visiteur
 * 
 * @property string $id
 * @property string|null $nom
 * @property string|null $prenom
 * @property string|null $login
 * @property string|null $mdp
 * @property string|null $adresse
 * @property string|null $cp
 * @property string|null $ville
 * @property Carbon|null $dateEmbauche
 * 
 * @property Collection|FicheFrai[] $fiche_frais
 *
 * @package App\Models
 */
class Visiteur extends Authenticatable
{
	protected $table = 'Visiteur';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'dateEmbauche' => 'datetime'
	];

	protected $fillable = [
		'nom',
		'prenom',
		'login',
		'mdp',
		'adresse',
		'cp',
		'ville',
		'dateEmbauche'
	];

	public function fiche_frais()
	{
		return $this->hasMany(FicheFrai::class, 'idVisiteur');
	}
}
