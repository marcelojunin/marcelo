<?php 

namespace Painel\Services;

use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Painel\Repositories\PromotionsRepository;
use Painel\Services\UploadService;
// use Painel\Models\Uploads;
// use Painel\Repositories\UploadsRepository;
/**
* 
*/
class PromotionsService 
{
	private $promotionsRepository;
	private $uploadService;

	
	public function __construct(PromotionsRepository $promotionsRepository, UploadService $uploadService)
	{
		$this->promotionsRepository = $promotionsRepository;
		$this->uploadService = $uploadService;
	}

	public function saveUpload($files, $id)
	{
		if(is_object($id))
		{
			$id = $id->id;
		}

		$entityManager = new Uploadspromotions();
		$arr = $this->uploadService->doUpload($files, $entityManager);

		foreach ($arr as $entry) 
		{
			$entry->promotions_id = $id;
			$entry->save();	
		}

		$result = $this->promotionsRepository->find($id);

		$result['status'] = 1;

		return $result;
	}

}
 ?>