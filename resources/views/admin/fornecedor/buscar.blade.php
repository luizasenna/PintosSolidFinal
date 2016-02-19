@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Fornecedores
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <h1>Fornecedores</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('dashboard') }}">
                            <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="active">Fornecedores</li>
                </ol>
            </section>
            <section class="content">
			<div class="row">
				<div class="column col-md-12 col-sm-12 col-xs-12">	
					<table style="margin-top:10px;">
						<tr>
							<form class="form-horizontal" action="buscarloja">
							<fieldset>
							<td>
								<div class="form-group">
									<label class="col-md-4 control-label" for="button1id" id="nome" name="nome">Buscar Fornecedores</label>
										<div class="col-md-8">
										<input id="" name="" type="search" placeholder="Inisira um nome" class="form-control input-md">
							</td>
							<td>
								<button id="button2id" name="button2id" class="btn btn-danger">Buscar</button>
								</div>
								</div>
								</fieldset>
								</form>
							</td>
							<td>
										<a href="nova" class="btn btn-md btn-primary"><span class="glyphicon glyphicon-plus"></span> Inserir</a>
							</td>
							</tr>
					</table>
			  </div>
			  <div class="column col-md-12 col-sm-12 col-xs-12">		 	
              <div class="table-scrollable">
                                    <table class="table table-striped table-bordered table-advance table-hover">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <i class="glyphicon glyphicon-chevron-right"></i>
                                                    Código
                                                </th>
                                                <th class="hidden-xs">
                                                    <i class="glyphicon glyphicon-chevron-right"></i>
                                                    Nome
                                                </th>
                                                 <th class="hidden-xs">
                                                    <i class="glyphicon glyphicon-chevron-right"></i>
                                                    Status
                                                </th>
                                                <th>
                                                    <i class="glyphicon glyphicon-chevron-right"></i>
                                                    Observação
                                                </th>
                                               
                                                <th>
													<i class="glyphicon glyphicon-chevron-right"></i>
													Telefone 1</th>
                                                <th>
													<i class="glyphicon glyphicon-chevron-right"></i>
													Telefone 2</th>
												<th>
													<i class="glyphicon glyphicon-chevron-right"></i>
													Ver / Editar</th>	
                                            </tr>
                                        </thead>
                                        <tbody>
											 <?php foreach ($fornecedores as $p): ?>
											<tr {{$p->status<1 ? 'active' : '' }}>
											  <td><?= $p->id ?></td>
											  <td><?= $p->nome ?></td>
											  <td><?= $p->status ?></td>
											  <td><?= $p->observacoes ?></td>
											  <td><?= $p->ddd1 ?> - <?= $p->telefone1 ?></td>
											  <td><?= $p->ddd2 ?> - <?= $p->telefone2 ?></td>
											  <td><a href="/loja/mostra/<?= $p->id ?>">
												  <span class="glyphicon glyphicon-search"></span>
												</a></td>
											</tr>
											<?php endforeach ?>
											
                                        </tbody>
                                    </table>
                                </div>
            </div></div>
            
            </section>

        
    @stop

{{-- page level scripts --}}
@section('footer_scripts')
@stop