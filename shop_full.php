<?php
    include 'comp/header.php';
    include 'comp/db.php';

    // Definindo o número de itens por página
    $itens_por_pagina = 8;

    // Verificando qual a página atual, se não houver, define como 1
    $pagina_atual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
    $inicio = ($pagina_atual - 1) * $itens_por_pagina;

    // Verificando se há filtro por subcategoria
    $subcategoria_id = isset($_GET['subcategoria_id']) ? (int)$_GET['subcategoria_id'] : null;
    
    // Contagem total de produtos para calcular o número total de páginas
    if ($subcategoria_id) {
        // Filtrar produtos pela subcategoria
        $total_produtos_query = $db->prepare("SELECT COUNT(*) as total FROM produtos WHERE subcategoria_id = ?");
        $total_produtos_query->bind_param('i', $subcategoria_id);
        $total_produtos_query->execute();
        $total_produtos_result = $total_produtos_query->get_result();
        $total_produtos = $total_produtos_result->fetch_assoc()['total'];
        
        $produtos_query = $db->prepare("
            SELECT p.id, p.nome, p.descricao, p.imagem, s.nome as subcategoria, c.nome as categoria 
            FROM produtos p 
            JOIN subcategorias s ON p.subcategoria_id = s.id
            JOIN categorias c ON s.categoria_id = c.id
            WHERE p.subcategoria_id = ?
            LIMIT ?, ?
        ");
        $produtos_query->bind_param('iii', $subcategoria_id, $inicio, $itens_por_pagina);
    } else {
        // Sem filtro de subcategoria
        $total_produtos = $db->query("SELECT COUNT(*) as total FROM produtos")->fetch_assoc()['total'];
        
        $produtos_query = $db->prepare("
            SELECT p.id, p.nome, p.descricao, p.imagem, s.nome as subcategoria, c.nome as categoria 
            FROM produtos p 
            JOIN subcategorias s ON p.subcategoria_id = s.id
            JOIN categorias c ON s.categoria_id = c.id
            LIMIT ?, ?
        ");
        $produtos_query->bind_param('ii', $inicio, $itens_por_pagina);
    }

    $produtos_query->execute();
    $produtos = $produtos_query->get_result();

    // Calculando o número total de páginas
    $total_paginas = ceil($total_produtos / $itens_por_pagina);
?>

        <!-- Breadcrumb area Start -->
        <section class="page-title-area bg-image ptb--80" data-bg-image="assets/img/bg/page_title_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">Catálogo</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb area End -->

        <!-- Main Content Wrapper Start -->
        <div  class="main-content-wrapper">
            <div class="shop-page-wrapper shop-fullwidth ptb--80">
                <div class="container">
                    <div class="row mb--50">
                        <div class="col-12">
                            <div class="shop-toolbar">
                                <div class="row align-items-center">
                                    <div class="col-md-5 mb-sm--30 mb-xs--10">
                                        <div class="shop-toolbar__left">
                                            <div class="product-ordering">
                                                <select class="product-ordering__select nice-select">
                                                    <option value="0">Categoria</option>
                                                    <option value="1">Área Externa</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="shop-toolbar__right d-flex justify-content-md-end justify-content-start flex-sm-row flex-column">
                                            <p class="product-pages">A Mostrar  08 De  72</p>
                                            <div class="product-view-mode ml--50 ml-xs--0">
                                                <a class="active" href="#" data-target="grid">
                                                    <img src="uploads/grid.png" alt="Grid">
                                                </a>
                                                <a href="#" data-target="list">
                                                    <img src="uploads/list.png" alt="Grid">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="container-fluid shop-products">
                    
                    <div class="row">
                    <?php while ($produto = $produtos->fetch_assoc()) { ?>
                        <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                            <div class="ft-product">
                                <div class="product-inner">
                                    <div class="product-image">
                                        <figure class="product-image--holder">
                                            <img src="<?php echo $produto['imagem']; ?>" alt="Product">
                                        </figure>
                                        <a href="#" class="product-overlay"></a>
                                        <div class="product-action">
                                            <a data-bs-toggle="modal" data-bs-target="#productModal" class="action-btn">
                                                <i class="la la-eye"></i>
                                            </a>
                                            <a href="#" class="action-btn">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                            <a href="#" class="action-btn">
                                                <i class="la la-repeat"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-category">
                                            <a href="#"><?php echo $produto['subcategoria']; ?></a>
                                        </div>
                                        <h3 class="product-title"><a href="#"><?php echo $produto['nome']; ?>.</a></h3>
                                        <div class="product-info-bottom">
                                            <div class="product-price-wrapper">
                                                <span class="money">Em Stock</span>
                                            </div>
                                            <a href="cart.html" class="add-to-cart pr--15">
                                                <i class="la la-plus"></i>
                                                <span>Adicionar a cotação</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    
                    <div class="row">
                        <div class="col-12">
                            <nav class="pagination-wrap mt--35 mt-md--25">
                                <ul class="pagination">
                                <?php if ($pagina_atual > 1): ?>
                                    <li>
                                        <a href="?pagina=<?php echo $pagina_atual - 1; ?><?php echo $subcategoria_id ? '&subcategoria_id=' . $subcategoria_id : ''; ?>">
                                            <i class="la la-angle-double-left"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php for ($i = 1; $i <= $total_paginas; $i++): ?>
                                    <li>
                                        <a href="?pagina=<?php echo $i; ?><?php echo $subcategoria_id ? '&subcategoria_id=' . $subcategoria_id : ''; ?>"
                                        <?php if ($pagina_atual == $i) echo 'class="page-number current"'; ?>>
                                            <?php echo sprintf('%02d', $i); ?>
                                        </a>
                                    </li>
                                <?php endfor; ?>
                                <?php if ($pagina_atual < $total_paginas): ?>
                                    <li>
                                        <a href="?pagina=<?php echo $pagina_atual + 1; ?><?php echo $subcategoria_id ? '&subcategoria_id=' . $subcategoria_id : ''; ?>">
                                            <i class="la la-angle-double-right"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                </ul>
                            </nav>  
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Main Content Wrapper Start -->

        <!-- Footer Start-->
<?php include 'comp/footer.php' ?>       