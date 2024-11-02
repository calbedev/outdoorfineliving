<?php 
include 'components/header.php'; 
include 'components/db.php'; 

// Obtendo categorias
$queryCategorias = "SELECT id_categoria, nome_categoria FROM categorias";
$resultCategorias = $conn->query($queryCategorias);

// Definindo a quantidade de produtos por página
$produtosPorPagina = 8;
if (isset($_GET['pagina'])) {
    $paginaAtual = $_GET['pagina'];
} else {
    $paginaAtual = 1;
}
$offset = ($paginaAtual - 1) * $produtosPorPagina;

// Verificando se um nome de categoria foi inserido pelo usuário
$categoriaSelecionada = isset($_GET['popup-search']) ? trim($_GET['popup-search']) : '';

// Condição da query, baseada no nome da categoria inserido
$condicaoCategoria = $categoriaSelecionada ? "WHERE nome_moveis LIKE '%$categoriaSelecionada%'" : "";

// Obtendo o total de móveis, considerando o nome da categoria inserido
$queryTotalProdutos = "SELECT COUNT(*) as total FROM moveis 
                      JOIN categorias ON moveis.categoria = categorias.id_categoria 
                      $condicaoCategoria";
$resultTotal = $conn->query($queryTotalProdutos);
$totalProdutos = $resultTotal->fetch_assoc()['total'];

// Obtendo móveis para a página atual
$queryProdutos = "SELECT * FROM moveis 
                  JOIN categorias ON moveis.categoria = categorias.id_categoria 
                  $condicaoCategoria 
                  LIMIT $offset, $produtosPorPagina";
$resultProdutos = $conn->query($queryProdutos);
?>

<!-- Header End -->

<!-- Breadcrumb area Start -->
<section class="page-title-area bg-image ptb--80" data-bg-image="assets/img/bg/page_title_bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Nosso Catálogo</h1>
                <ul class="breadcrumb">
                    <li><a href="index.php">Resultado Para</a></li>
                    <li><span><?php echo $categoriaSelecionada ?></span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb area End -->

<!-- Main Content Wrapper Start -->
<div class="main-content-wrapper">
    <div class="shop-page-wrapper shop-fullwidth ptb--80">
        <div class="container">
            <div class="row mb--50">
                <div class="col-12">
                    <div class="shop-toolbar">
                        <div class="row align-items-center">
                            <div class="col-md-5 mb-sm--30 mb-xs--10">
                                <div class="shop-toolbar__left">
                                    <div class="product-ordering">
                                        <!-- Formulário para filtro de categoria -->
                                        <form method="GET" action="">
                                            <select name="categoria" class="product-ordering__select nice-select">
                                                <option value="0">Resultado</option>
                                                
                                            </select>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="shop-toolbar__right d-flex justify-content-md-end justify-content-start flex-sm-row flex-column">
                                    <p class="product-pages">Exibindo <?= $resultProdutos->num_rows ?> de <?= $totalProdutos ?></p>
                                    <div class="product-view-mode ml--50 ml-xs--0">
                                        <a class="active" href="#" data-target="grid">
                                            <img src="assets/img/icons/grid.png" alt="Grid">
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
                <?php 
                // Exibindo móveis filtrados por categoria
                while($produto = $resultProdutos->fetch_assoc()) {
                ?>
                <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                    <div class="ft-product">
                        <div class="product-inner">
                            <div class="product-image">
                                <figure class="product-image--holder">
                                    <img src="<?= $produto['banner'] ?>" alt="<?= $produto['nome_moveis'] ?>">
                                </figure>
                                <a href="product-details.php?id=<?= $produto['id_moveis'] ?>" class="product-overlay"></a>
                                <div class="product-action">
                                    <a data-bs-toggle="modal" data-bs-target="#productModal" class="action-btn">
                                        <i class="la la-eye"></i>
                                    </a>
                                    <a href="#" class="action-btn">
                                        <i class="la la-repeat"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-category">
                                    <a href="catalogo.php?categoria=<?= $produto['id_categoria'] ?>"><?= $produto['nome_categoria'] ?></a>
                                </div>
                                <h3 class="product-title"><a href="ls.php?id=<?= $produto['id_moveis'] ?>"><?= $produto['nome_moveis'] ?></a></h3>
                                <div class="product-info-bottom">
                                    <div class="product-price-wrapper">
                                        <span class="money"></span>
                                    </div>
                                    <a href="#" class="add-to-cart pr--15">
                                        <i class="la la-plus"></i>
                                        <span>Pedir Cotação</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                }
                ?>
            </div>
            <div class="row">
                <div class="col-12">
                    <nav class="pagination-wrap mt--35 mt-md--25">
                        <ul class="pagination">
                            <?php 
                            // Calculando número de páginas
                            $totalPaginas = ceil($totalProdutos / $produtosPorPagina);
                            for ($i = 1; $i <= $totalPaginas; $i++) {
                                if ($i == $paginaAtual) {
                                    echo "<li><span class='page-number current'>$i</span></li>";
                                } else {
                                    echo "<li><a href='?pagina=$i' class='page-number'>$i</a></li>";
                                }
                            }
                            ?>
                        </ul>
                    </nav>  
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Content Wrapper End -->

<!-- Footer Start-->
<?php include 'components/footer.php'; ?>
