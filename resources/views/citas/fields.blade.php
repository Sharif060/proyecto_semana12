<!-- Idpaciente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idpaciente', 'Idpaciente:') !!}
    {!! Form::number('idpaciente', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::text('fecha', null, ['class' => 'form-control','id'=>'fecha']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Id Doctor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_doctor', 'Id Doctor:') !!}
    {!! Form::number('id_doctor', null, ['class' => 'form-control']) !!}
</div>