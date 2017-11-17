<?php

$hierarquia = array(
		array(
				'nome_cargo' => 'CEO',
				'subordinados'=>array(
					//Início: Diretor Comercial
					array(

							'nome_cargo'=>'Diretor Comercial',
							'subordinados'=>array(
								// Início: Gerente de Vendas
									array(
											'nome_cargo'=>'Gerente de Vendas'
										),
								// Término: Gerente de Vendas	
								),
						),
					//Término: Diretor Comercial
					//Início: Diretor Financeiro
					array(
							'nome_cargo'=>'Diretor Financeiro',
							'subordinados'=>array(
								//Início: Gerente Contas a Pagar
								array(

										'nome_cargo'=>'Gerente de Contas a Pagar',
										'subordinados'=>array(
												//inicio: Supervisor
												array(
														'nome_cargo'=>'Supervisor de Pagamentos'
													)

												//Termino: Supervisor de Pagamentos
											)
									),
								//Termino: Gerente de Contas a Pagar
								//Inicio: Gerente de Compras
								array(
										'nome_cargo'=>'Gerente de Compras'
										'subordinados'=>array(
												//Inicio: Supervisor de Suprimentos
												array(
														'nome_cargo'=>'Supervisor de Suprimentos'
													),
												//Termino: Supervisor de Suprimentos
											)
									)
								//Termino: Gerente de Compras
								)
						),
					//Término: Diretor Financeiro


					),

			),


	); 


?>