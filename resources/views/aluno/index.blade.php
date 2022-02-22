<html>
	<body>
		<form method = 'POST' action="/aluno">
			<div>
				<label>Nome</label> 
				<input type="text" name="nome" value=" {{ $aluno -> Nome }}"/>
			</div>
			<div>
				<label>Email</label>
				<input type="text" name="email" value=" {{ $aluno -> Email }}"/>
			</div>
			<div>
				<label>Genêro</label>
				<select name="genero">
					<option value=""></option>
					<option value="M" {{ $aluno -> genero == "M" ? "selected" 
						: "" }} >
					Masculino</option>	
					<option value="F" {{ $aluno -> genero == "F" ? "selected" 
						: "" }} >
					Feminino</option>
					<option value="N" {{ $aluno -> genero == "N" ? "selected" 
						: "" }} >
					Não declarado</option>
				</select>
			</div>
			<div>
				<Label>Observações</Label>
				<textarea name="obs" height="2">{{$aluno -> obs}}</textarea>
			</div>
			<div>
				@csrf
				<input type="hidden" name="id" value = "{{ $aluno -> id }}">
				<button type="submit">Salvar</button>
			</div>
			<table border="20">
				<thead>
					<tr>
						<th>nome</th>
						<th>email</th>
						<th>editar</th>
						<th>excluir</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($alunos as $aluno)
					<tr>
						<td>{{ $aluno->Nome }}</td>
						<td>{{ $aluno->Email }}</td>
						<td>
							<a href="/aluno/editar/{{ $aluno->id }}">
								Editar
							</a>
						</td>
						<td>							
							<a href="/aluno/excluir/{{ $aluno->id }}">
								Excluir
							</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</form>
	</body>
</html>