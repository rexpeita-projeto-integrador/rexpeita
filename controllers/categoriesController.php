<?php
class categoriesController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        header("Location: ".BASE_URL);
    }

    public function enter($id) {
        $store = new Store();
        $products = new Products();
        $categories = new Categories();
        $f = new Filters();

        $dados = $store->getTemplateData();

        $dados['category_name'] = $categories->getCategoryName($id);

        if(!empty($dados['category_name'])) {
            $currentPage = 1;
            $offset = 0;
            $limit = 3;

            if(!empty($_GET['p'])) {
                $currentPage = $_GET['p'];
            }

            $offset = ($currentPage * $limit) - $limit;

            $filters = array('category'=>$id);

            $dados['category_filter'] = $categories->getCategoryTree($id);

            $dados['list'] = $products->getList($offset, $limit, $filters);
            $dados['totalItems'] = $products->getTotal($filters);
            $dados['numberOfPages'] = ceil($dados['totalItems'] / $limit);
            $dados['currentPage'] = $currentPage;

            $dados['id_category'] = $id;

            $dados['filters'] = $f->getFilters($filters);
            $dados['filters_selected'] = $filters;

            $dados['searchTerm'] = '';
            $dados['category'] = '';

            $dados['categories'] = $categories->getList();

            $dados['sidebar'] = true;

            $this->loadTemplate('categories', $dados);
        } else {
            header("Location: ".BASE_URL);
        }
    }






















}