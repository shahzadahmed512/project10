<?php
  
namespace App\Http\Resources;
  
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
  
class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array

     */
    public function toArray(Request $request): array
    {
        // Return an array with the desired data and structure
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            // Include any other relevant fields
        ];
    }

    /**
     * Get additional data that should be returned with the resource array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function with($request)
    {
        // Include any additional data that should be returned with the resource
        return [
            'meta' => [
                'version' => '1.0',
            ],
        ];
    }
}