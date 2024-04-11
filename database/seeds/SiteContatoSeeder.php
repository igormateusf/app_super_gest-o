<?php

use App\SiteContato;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		/* $contato = new SiteContato();

		$contato->nome = 'Sistema SG';
		$contato->telefone = '(62) 9 8533-5327';
		$contato->email = 'contato@sg.com';
		$contato->motivo_contato = 1;
		$contato->mensagem = 'Seja bem vindo ao sistema super gestão';

		$contato->save(); */

		factory(SiteContato::class, 100)->create();
	}
}
