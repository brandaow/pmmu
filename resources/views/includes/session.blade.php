@if (session('success'))
    <div class="callout callout-success">
        <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><i class="icon fa fa-check"></i> Sucesso!</font></font></h4>
        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ session('success') }}</font></font></p>
    </div>
@endif

@if (session('error'))
    <div class="callout callout-danger">
        <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><i class="icon fa fa-ban"></i> Erro!</font></font></h4>
        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ session('error') }}</font></font></p>
    </div>
@endif