<section class="expertise-wrapper section-wrapper gray-bg">
    <div class="container-fluid">
        <div class="row">
             @if(session()->has('flash'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{ session()->get('flash') }}
            </div>
            @endif
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Experiencia</h2>
                </div>
            </div>
        </div>
        <!-- .row -->
        <div class="row">
            <div class="col-md-6">
                <div class="expertise-item">
                    <h3>Manejo Profesional</h3>
                    <p>Desarrollo profesional en lenguajes de programaci&oacute;n tales como PHP y Java.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="expertise-item">
                    <h3>Levantamiento de Requirimientos</h3>
                    <p>Experiencia en levantamiento de requerimientos e inicio de proyectos desde 0; amplia experiencia en desarrollo de sistemas de gran escala.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="expertise-item">
                    <h3>Consumo de APIs</h3>
                    <p>Implementaci&oacute;n, manejo y consumo de apis Rest.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="expertise-item">
                    <h3>Lider De Proyectos</h3>
                    <p>Manejo de proyectos utilizando metodologias agiles (SCRUM MASTER).</p>
                </div>
            </div>
        </div>
    </div>
</section>