<?

namespace App\Http\Services\Product;

use App\Dto\Product\createProductDto;
use App\Repositories\Interfaces\Product\ProductRepositoryInterface;
use Exception;

class UpdateProductService
{

    protected $repository;

    public function __construct(ProductRepositoryInterface $repository){

        $this->repository = $repository;
    }

    public function execute(createProductDto $productDto, int $id)
    {

        $product = $this->repository->update($productDto, $id);
        if(!$product){
            throw new Exception('Não foi possível atualizar categoria');
        }

        return $product;

    }
    
}