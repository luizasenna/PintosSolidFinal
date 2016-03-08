@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Editar Loja
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
    <h1>Editar Loja</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}">
                <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{ route('loja_index') }}">
                Lojas
            </a>
        </li>
        <li class="active">
            Editar {{ $entity->id }}
        </li>
    </ol>
</section>

<section class="content">

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span class="panel-title">Dados da Loja</span>
                </div>
                <div class="panel-body">

                    <form class="form-horizontal" method="POST" action="{{ route('loja_salva') }}">

                        {{ csrf_field() }}

                        <input type="hidden" name="last_id" value="{{ $entity->id }}">

                        <div class="form-group">
                            <label for="id" class="col-sm-2 control-label">Código</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" id="id" name="id" value="{{ $entity->id }}">
                            </div>

                            <label for="description" class="col-sm-1 control-label">Status</label>
                            <div class="col-sm-2">
                                <select class="form-control" name="status">
                                    @foreach($entity_status as $key => $value)
                                        <option value="{{ $key }}" {{ $entity->status == $key ? 'selected' : '' }}>{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description" class="col-sm-2 control-label">Descrição</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="descricao" value="{{ $entity->descricao }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">
                                    <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Salvar
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</section>

    @stop

{{-- page level scripts --}}
@section('footer_scripts')
@stop

