<div class="col-md-4">
    <div class="card">
        <div class="card-body">
            <h5 class="card-text">Adicionar novo curso</h5>
            <form action="controller/curso.php" method="post">
                <input class="form-control" type="text" name="nome_curso" placeholder="Nome do curso" required>
                <textarea class="form-control mt-1" name="descricao" cols="30" rows="10" placeholder="Descrição do curso" required></textarea>
                <div id="dragDropArea" class="mt-2"></div>
                <input class="btn btn-primary float-right mt-1" type="submit" value="Adicionar">
            </form>
        </div>
    </div>
</div>