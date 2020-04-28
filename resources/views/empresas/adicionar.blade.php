@extends("layout")

@section("titulo")
Adicionar empresa
@endsection


@section("conteudo")
<form method="post" >
  @csrf
  <div class="form-group">
    <label for="">Nome da empresa</label>
    <input type="text" name="nome" class="form-control" placeholder="Digite o nome da empresa">
  </div>
  <button class="btn btn-primary">Salvar</button>
</form>
@endsection

