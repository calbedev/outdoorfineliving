<section class="product-tab-area mb--30 mb-md--10">
                <div class="container">
                    <div class="row mb--28 mb-md--18 mb-sm--33">
                        <div class="col-md-3 text-md-start text-center">
                            <h2>Todos</h2>
                        </div>
                        <div class="col-md-9">
                            <div class="tab-style-1">
                                <div class="nav nav-tabs justify-content-md-end justify-content-center" id="product-tab" role="tablist">
                                    <button type="button" class="nav-item nav-link active" id="new-all-tab" data-bs-toggle="tab" data-bs-target="#new-all" role="tab" aria-controls="new-all" aria-selected="true">
                                        <span class="nav-text">Todos</span>
                                    </button>
                                    <button type="button" class="nav-item nav-link" id="new-wooden-tab" data-bs-toggle="tab" data-bs-target="#new-wooden" role="tab" aria-controls="new-wooden" aria-selected="false">
                                        <span class="nav-text">Mesas & Sofás</span>
                                    </button>
                                    <button type="button" class="nav-item nav-link" id="new-furnished-tab" data-bs-toggle="tab" data-bs-target="#new-furnished" role="tab" aria-controls="new-furnished" aria-selected="false">
                                        <span class="nav-text">Guarda Sol</span>
                                    </button>
                                    <button type="button" class="nav-item nav-link" id="new-table-tab" data-bs-toggle="tab" data-bs-target="#new-table" role="tab" aria-controls="new-table" aria-selected="false">
                                        <span class="nav-text">Artigos De Decoração</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-content" id="product-tab-content">
                                <div class="tab-pane fade show active" id="new-all" role="tabpanel" aria-labelledby="new-all-tab">
                                    <div class="row">
                                        <?php include 'pullall.php' ?>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="new-wooden" role="tabpanel" aria-labelledby="new-wooden-tab">
                                    <div class="row">
                                        <?php include 'pull2.php' ?>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="new-furnished" role="tabpanel" aria-labelledby="new-furnished-tab">
                                    <div class="row">
                                        <?php include 'pull3.php' ?>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="new-table" role="tabpanel" aria-labelledby="new-table-tab">
                                    <div class="row">
                                    <?php include 'pull4.php' ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>