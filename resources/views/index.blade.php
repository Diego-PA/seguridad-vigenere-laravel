<html>
	<head>
		<title>Vigenere Diego Puebla Aldama</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	</head>
	<body>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><em class="info">Cifrar</em>
            </div>
            <div class="card-body">        
                <form id="formulario" action={{ route('cifrar') }} method="post">
                    @csrf
                    <div class="form-group">
                        <label for="texto_corto">Llave</label>
                        <input type="text" class="form-control" name="key" placeholder="Ej. Alcance">
                    </div>
                    <div class="form-group">
                        <label for="texto_corto">Texto</label>
                        <input type="text" class="form-control" name="cadena" placeholder="Ej. Alcance">
                    </div>
                    <button id="guardar" class="btn btn-success">
                        Cifrar
                    </button>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><em class="info">Descifrar</em>
            </div>
            <div class="card-body">        
                <form id="formulario" action={{ route('descifrar') }} method="post">
                    @csrf
                    <div class="form-group">
                        <label for="texto_corto">Llave</label>
                        <input type="text" class="form-control" name="key" placeholder="Ej. perro">
                    </div>
                    <div class="form-group">
                        <label for="texto_corto">Texto cifrado</label>
                        <input type="text" class="form-control" name="cadena" placeholder="Ej. ASDAEFSWTGVFSFD">
                    </div>
                    <button id="guardar" class="btn btn-success">
                        Descifrar
                    </button>
                </form>
            </div>
        </div>

	</body>
</html>