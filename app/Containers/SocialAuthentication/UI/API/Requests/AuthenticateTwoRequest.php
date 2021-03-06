<?php

namespace App\Containers\SocialAuthentication\UI\API\Requests;

use App\Port\Request\Abstracts\Request;

/**
 * Class AuthenticateTwoRequest.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class AuthenticateTwoRequest extends Request
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'code'     => 'required',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
