<div class="table-responsive">
    <table class="table" id="citaDetalles-table">
        <thead>
            <tr>
                <th>Idcitas</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($citaDetalles as $citaDetalles)
            <tr>
                <td>{{ $citaDetalles->idcitas }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['citaDetalles.destroy', $citaDetalles->id_detallecita], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('citaDetalles.show', [$citaDetalles->id_detallecita]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('citaDetalles.edit', [$citaDetalles->id_detallecita]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
