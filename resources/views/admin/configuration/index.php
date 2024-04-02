<div class="container my-5">
    <div class="row">
        <h2>Configuración General</h2>
        <hr>
    </div>
    <form action="/<?= FOLDER_ADMIN ?>configuration/store" method="post">
        <div class="row">
            <label for="logo" class="text-start w-100 fw-bold">Logo</label>
            <div class="d-flex align-items-center justify-content-center gap-4 flex-wrap flex-md-nowrap flex-row">
                <div class="img-destacada">
                    <img src="<?= (!empty($this->configuration->logo)) ?  $this->configuration->logo : '/resources/image/admin/default-1200-x-800.jpg' ?>" alt="Destacada" id="picture">

                </div>
                <div class="input-group">
                    <input type="text" name="logo" id="logo" class="form-control" value="<?= $this->configuration->logo ?>">
                    <span class="input-group-text" id="button-logo">Seleccionar...</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="input-group my-3">
                <label for="project" class="text-start w-100 fw-bold">Nombre de la empresa</label>
                <input type="text" name="project" id="project" class="form-control" value="<?= $this->configuration->project ?>">
            </div>
            <div class="input-group mb-3">
                <label for="description" class="text-start w-100 fw-bold">Descripción de la empresa</label>
                <textarea name="description" id="description" rows="7" class="form-control"><?= $this->configuration->description ?></textarea>
            </div>
            <div class="input-group mb-3">
                <label for="keywords" class="text-start w-100 fw-bold">Etiquetas</label>
                <textarea name="keywords" id="keywords" rows="3" class="form-control"><?= $this->configuration->keywords ?></textarea>
            </div>
        </div>
        <div class="row">
            <h4 class="">reCaptcha</h4>
            <div class="input-group mb-3">
                <label for="public_key" class="text-start w-100 fw-bold">Clave pública</label>
                <input type="text" name="public_key" id="public_key" class="form-control" value="<?= $this->configuration->public_key ?>">
            </div>
            <div class="input-group mb-3">
                <label for="secret_key" class="text-start w-100 fw-bold">Clave secreta</label>
                <input type="text" name="secret_key" id="secret_key" class="form-control" value="<?= $this->configuration->secret_key ?>">
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-warning">Guardar</button>
            </div>
        </div>
    </form>
</div>