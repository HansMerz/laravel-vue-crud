@extends('app')

@section('content')
    <div id="crud" class="row">
        <div class="col-md-12">
            <h1 class="page-header">CRUD Laravel y VUEjs</h1>
        </div>
        <div class="col-md-7">
            <a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#create">Nueva tarea</a>
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tarea</th>
                        <th colspan="2">
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="keep in keeps">
                        <td width="10px">@{{ keep.id }}</td>
                        <td>@{{ keep.keep }}</td>
                        <td width='10px'>
                            <a href="#" v-on:click.prevent="editKeep(keep)" class="btn btn-warning btn-sm">Editar</a>
                        </td>
                        <td width='10px'>
                            <a href="#" v-on:click.prevent="deleteKeep(keep)" class="btn btn-danger btn-sm">Eliminar</a>
                        </td>
                    </tr>
                </tbody>
            </table>

            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item" v-if="pagination.current_page > 1">
                        <a class="page-link" href="#" @click.prevent="changePage(pagination.current_page - 1)">
                            <span>Atrás</span>
                        </a>
                    </li>
                    <li class="page-item" v-for="page in pagesNumber" v-bind:class="[ page == isActived ? 'active' : '']">
                        <a  class="page-link"href="#" @click.prevent="changePage(page)">
                            @{{ page }}
                        </a>
                    </li>
                    <li class="page-item" v-if="pagination.current_page < pagination.last_page">
                        <a class="page-link" href="#" @click.prevent="changePage(pagination.current_page + 1)">
                            <span>Siguiente</span>
                        </a>
                    </li>
                </ul>
            </nav>

            @include('create')
            @include('edit')
        </div>
        <div class="col-md-5">
            <pre>
                @{{ $data }}
            </pre>
        </div>
    </div>
@endsection