<?php

/*
|--------------------------------------------------------------------------
| Validation Language Lines
|--------------------------------------------------------------------------
|
| The following language lines contain the default error messages used by
| the validator class. Some of these rules have multiple versions such
| as the size rules. Feel free to tweak each of these messages here.
|
*/

return [
	'accepted' => 'Este campo deve ser aceite.',
	'accepted_if' => 'Esta campo deverá ser aceite quando :other é igual a :value.',
	'active_url' => 'A Url é inválida.',
	'after' => 'Esta deve ser uma data após :date.',
	'after_or_equal' => 'Esta deve ser uma data posterior ou igual a :date.',
	'alpha' => 'Este campo pode conter apenas letras.',
	'alpha_dash' => 'Este campo pode conter apenas letras, números, traços e o caractere de sublinhado.',
	'alpha_num' => 'Este campo pode conter apenas letras e números',
	'array' => 'Este campo deve ser uma matriz.',
	'attached' => 'Este campo já se encontra anexado.',
	'before' => 'Esta deve ser uma data anterior a :date.',
	'before_or_equal' => 'Esta deve ser uma data anterior ou igual a :date.',
	'between' => [
		'array' => 'Este conteúdo deve estar entre :min e :max itens.',
		'file' => 'Este ficheiro deve estar entre :min e :max kilobytes.',
		'numeric' => 'Este valor deve estar entre :min e :max.',
		'string' => 'Esta cadeia de texto deve estar entre :min e :max caracteres.',
	],
	'boolean' => 'Este campo deve ser verdadeiro ou falso.',
	'confirmed' => 'A confirmação não corresponde.',
	'current_password' => 'The password is incorrect.',
	'date' => 'Esta não é uma data válida.',
	'date_equals' => 'Esta deve ser uma data igual a :date.',
	'date_format' => 'Isto não corresponde ao formato :format.',
	'different' => 'Este valor deve ser diferente de :other.',
	'digits' => 'Este valor deve ter :digits digitos.',
	'digits_between' => 'Este valor deve estar entre :min e :max digitos.',
	'dimensions' => 'Esta imagem tem dimensões inválidas.',
	'distinct' => 'Este campo tem um valor duplicado.',
	'email' => 'Este deve ser um endereço de e-mail válido.',
	'ends_with' => 'Isso deve terminar com um dos seguintes valores :values.',
	'exists' => 'O valor selecionado é inválido.',
	'file' => 'O conteúdo deve ser um ficheiro.',
	'filled' => 'Este campo deve ter um valor.',
	'gt' => [
		'array' => 'O conteúdo deve ter mais de :value itens.',
		'file' => 'O tamanho do ficheiro deve ser maior que :value kilobytes.',
		'numeric' => 'O valor deve ser maior que :value.',
		'string' => 'A cadeia de texto deve ser maior que :value caracteres.',
	],
	'gte' => [
		'array' => 'O conteúdo deve ter :value itens ou mais.',
		'file' => 'O tamanho do ficheiro deve ser maior ou igual :value kilobytes.',
		'numeric' => 'O valor deve ser maior ou igual :value.',
		'string' => 'A cadeia de texto deve ser maior ou igual a :value caracteres.',
	],
	'image' => 'Deve ser uma imagem.',
	'in' => 'O valor selecionado é inválido.',
	'in_array' => 'Este valor não existe em :other.',
	'integer' => 'Este deve ser um número inteiro.',
	'ip' => 'Este deve ser um endereço IP válido.',
	'ipv4' => 'Este deve ser um endereço IPv4 válido.',
	'ipv6' => 'Este deve ser um endereço IPv6 válido.',
	'json' => 'Essa deve ser uma cadeia de texto JSON válida.',
	'lt' => [
		'array' => 'O conteúdo deve ter menos de :value itens.',
		'file' => 'O tamanho do ficheiro deve ser menor que :value kilobytes.',
		'numeric' => 'O valor deve ser menor que :value.',
		'string' => 'A cadeia de texto deve ser menor que :value caracteres.',
	],
	'lte' => [
		'array' => 'O conteúdo não deve ter mais do que :value itens.',
		'file' => 'O tamanho do ficheiro deve ser menor ou igual :value kilobytes.',
		'numeric' => 'O valor deve ser menor ou igual :value.',
		'string' => 'A cadeia de texto deve ser menor ou igual :value caracteres.',
	],
	'max' => [
		'array' => 'O conteúdo pode não ter mais do que :max itens.',
		'file' => 'O tamanho do ficheiro não pode ser maior que :max kilobytes.',
		'numeric' => 'O valor não pode ser maior que :max.',
		'string' => 'A cadeia de texto não pode ser maior que :max caracteres.',
	],
	'mimes' => 'Este deve ser um ficheiro do tipo: :values.',
	'mimetypes' => 'Este deve ser um ficheiro do tipo: :values.',
	'min' => [
		'array' => 'O valor deve ter pelo menos :min itens.',
		'file' => 'O tamanho do ficheiro deve ser pelo menos :min kilobytes.',
		'numeric' => 'O valor deve ser pelo menos :min.',
		'string' => 'A cadeia de texto deve ser pelo menos :min characters.',
	],
	'multiple_of' => 'O valor deve ser um múltiplo de :value',
	'not_in' => 'O valor selecionado é inválido.',
	'not_regex' => 'Este formato é inválido.',
	'numeric' => 'Este deve ser um número.',
	'password' => 'A palavra-passe está incorreta.',
	'present' => 'Este campo deve estar presente.',
	'prohibited' => 'Este campo é proibido.',
	'prohibited_if' => 'Este campo é proibido quando :other é :value.',
	'prohibited_unless' => 'Este campo é proibido a menos que :other esteja em :values.',
	'prohibits' => 'This field prohibits :other from being present.',
	'regex' => 'Este formato é inválido.',
	'relatable' => 'Este campo pode não estar associado a este recurso.',
	'required' => 'Este campo é obrigatório.',
	'required_if' => 'Este campo é obrigatório quando :other é :value.',
	'required_unless' => 'Este campo é obrigatório, a menos que :other esteja em :values.',
	'required_with' => 'Este campo é obrigatório quando :values estiverem presentes.',
	'required_with_all' => 'Este campo é obrigatório quando :values estão presentes.',
	'required_without' => 'Este campo é obrigatório quando :values não estão presentes.',
	'required_without_all' => 'Este campo é obrigatório quando nenhum dos :values estiver presente.',
	'same' => 'O valor desse campo deve corresponder ao valor de :other.',
	'size' => [
		'array' => 'O conteúdo deve conter :items de tamanho.',
		'file' => 'O tamanho do ficheiro deve ser :size kilobytes.',
		'numeric' => 'O valor deve ser: size.',
		'string' => 'A cadeia de texto deve ser :size  de tamanho.',
	],
	'starts_with' => 'Este campo deve começar com um dos seguintes valores: :values.',
	'string' => 'Este campo deve ser uma cadeia de texto.',
	'timezone' => 'Esta deve ser uma zona válida.',
	'unique' => 'Isso já foi utilizado.',
	'uploaded' => 'Falhou ao carregar.',
	'url' => 'Este formato é inválido.',
	'uuid' => 'Este deve ser um UUID válido.',
	'custom' => [
		'attribute-name' => [
			'rule-name' => 'custom-message',
		],
	],
];