@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Curso</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/curso/create') }}"
                              class="btn btn-success btn-sm" title="Add New Curso">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            Adicionar novo
                        </a>

                        <form method="GET" action="{{ url('/admin/curso') }}"
                            accept-charset="UTF-8"
                            class="form-inline my-2 my-lg-0 float-right"
                            role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Pesquisar..."
                                  value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th><th>Nome</th><th>Descricao</th><th>Carga Horaria</th>

                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($curso as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nome }}</td><td>{{ $item->descricao }}</td><td>{{ $item->carga_horaria }}</td>
                                        <td>
                                            <a href="{{ url('/admin/curso/' . $item->id) }}"
                                                title="View Curso">
                                                <button class="btn btn-info btn-sm">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>

                                                </button>
                                            </a>
                                            <a href="{{ url('/admin/curso/' . $item->id . '/edit') }}"
                                                 title="Edit Curso">
                                                 <button class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </button>
                                            </a>

                                            <form method="POST" action="{{ url('/admin/curso' . '/' . $item->id) }}" 
                                                accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Curso"
                                                    onclick="return
                                                    confirm(&quot;Confirm delete?&quot;)">
                                                              <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $curso->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
