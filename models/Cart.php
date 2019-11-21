<?php
class Cart extends model {

	public function getList() {
		$products = new Products();

		$array = array();
        $cart = array();
        If(isset($_SESSION['cart']))
        {
            $cart = $_SESSION['cart'];
        }
		

		foreach($cart as $id => $qt) {

			$info = $products->getInfo($id);

			$array[] = array(
				'id' => $id,
				'qt' => $qt,
				'price' => $info['price'],
				'name' => $info['name'],
				'image' => $info['image']
			);

		}

		return $array;
	}

	public function getSubtotal() {
		$list = $this->getList();

		$subtotal = 0;

		foreach($list as $item) {
			$subtotal += (floatval($item['price']) * intval($item['qt']));
		}

		return $subtotal;
	}

    public function shippingCalculate($cepDestination)
            {
                $array = array(
                    'price' => 0,
                    'data' => '');
                
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
