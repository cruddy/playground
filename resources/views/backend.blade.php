@extends('cruddy::custom')

@section('title')
    Welcome!
@overwrite

@section('body')
    <p>Welcome to Cruddy playground page! You can observe following enties:</p>

    <ul>
        <li>
            <a href="/backend/posts">Posts</a> show basic fields, they use CKEditor for editing body, image
            uploads and also have embedded meta-fields form.
        </li>

        <li>
            <a href="/backend/products">Products</a> are made to show the power of embedded forms, they have
            parameters that you can edit without switching entities.
        </li>
    </ul>
@overwrite