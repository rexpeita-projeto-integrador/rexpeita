<?php
class cartController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $store = new Store();
        $products = new Products();
        $cart = new Cart();
        $cep = '';
        $shipping = array();
        
        if(!empty($_POST['cep']))
        {
            $cep = intval($_POST['cep']);
            $shipping = $cart->shippingCalculate($cepDestination);
            {
                $array = array(
                    'price' => 0,
                    'data' => '',
                );
                
                $data = array(
                    'nCdServico' => '40010',
                    'sCepOrigem' => $config['cep-origin'],
                    'sCepDestino' => $cepDestination,
                    'nVlPeso' => $nVlPeso,
                    'nCdFormato' => '1',
                    'nVlComprimento' => $nVlComprimento,
                    'nVlAltura' => $nVlAltura,
                    'nVlLargura' => $nVlLargura,
                    'nVlDiametro' => $nVlDiametro,
                    'sCdMaoPropria' => 'N',
                    'nVlValorDeclarado' => $nVlValorDeclarado,
                    'sCdAvisoRecebimento' => 'N',
                    'StrRetorno' => 'xml',
                );
                //url do serviço do correio
                $url = 'http://ws.correios.com.br/calculador/CalcPrecoprazo.aspx';
                
                $data = http_build_query($data);
                
                $ch = curl_init($url.'?'.$data);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $r = curl_exec($ch);
                $r = $implexml_load_string($r);
                
                $array['price'] = current($r->cServico->Valor);
                $array['date'] = current($r->cServico->PrazoEntrega);
                
                return $array;
            }
        }

        if(!isset($_SESSION['cart']) || (isset($_SESSION['cart']) && count($_SESSION['cart']) == 0)) {
            header("Location: ".BASE_URL);
            exit;
        }

        $dados = $store->getTemplateData();

        $dados['shipping'] = $shipping;
        
        $dados['list'] = $cart->getList();

        $this->loadTemplate('cart', $dados);
    }

    public function del($id) {
        if(!empty($id)) {
            unset($_SESSION['cart'][$id]);
        }

        header("Location: ".BASE_URL."cart");
        exit;
    }

    public function add() {

        if(!empty($_POST['id_product'])) {
            $id = intval($_POST['id_product']);
            $qt = intval($_POST['qt_product']);

            if(!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = array();
            }

            if(isset($_SESSION['cart'][$id])) {
                $_SESSION['cart'][$id] += $qt;
            } else {
                $_SESSION['cart'][$id] = $qt;
            }
        }

        header("Location: ".BASE_URL."cart");
        exit;

    }

}