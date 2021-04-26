<?php 
function validateForm(): void
{
    $name = preg_match("/^[а-я А-Я a-z A-Z]+$/u", getPostParameter('name')) ? getPostParameter('name') : '';
    $email = filter_var(strtolower(getPostParameter('email')), FILTER_VALIDATE_EMAIL) ? strtolower(getPostParameter('email')) : '';
    $country = getPostParameter('country') !== '...' ? getPostParameter('country') : '-';
    $message = strip_tags(getPostParameter('message'));
    $error = 'Invalid parameter value';
    $dataForm = [
        'name' => $name,
        'email' => $email, 
        'country' => $country,
        'gender' => getPostParameter('gender'),
        'message' => $message
    ];
    if ($name === '' || $email === '' || $message === '')
    {
        $dataForm['success'] = false;
        $dataForm['error'] = 'Invalid parameter value';
        $dataForm['err_name'] = $name === '';
        $dataForm['err_email'] = $email === '';
        $dataForm['err_message'] = $message === '';
    }
    else
    {
        saveData($dataForm);
        $dataForm['success'] = true;
    }    
    mainPage($dataForm);
}

function saveData(array $dataset): void
{
    $fileData = json_encode($dataset);
    file_put_contents(__DIR__ . '/../../web/messages/' . strtolower($dataset['email']) . '.txt', $fileData);
}