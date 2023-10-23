# Atividade: Mensagens HTTP

O servidor `web1.kutzke.com.br` está preparado para responder requisições baseadas no padrão [REST](https://developer.mozilla.org/en-US/docs/Glossary/REST).

Utilize o comando `curl` para interagir com o servidor `web1.kutzke.com.br` e alterar os registro por ele armazenados.

Ao final, preencha no arquivo `README.md`, cada uma dos comandos utilizados e a respectiva saída contendo as mensagens de requisição e resposta (é só colar a saída do comando `curl`).

O site responde às seguintes requisições:

| Verbo HTTP | Padrão UR   | Função                              |
|-----------:|-------------|-------------------------------------|
|        GET | /posts      | Lista posts (index)                 |
|       POST | /posts      | Cria um novo post (create)          |
|        GET | /posts/id   | Exibe o post número "id" (show)     |
|        PUT | /posts/id   | Altera o post número "id" (update)  |
|     DELETE | /posts/id   | Remove o post número "id" (delete)  |

## Exemplo com o método GET

```bash
curl -X GET -v web1.kutzke.com.br/posts   
```


### GET (listar)

```
$ curl -X GET -v web1.kutzke.com.br/posts
```

```
* Connected to web1.kutzke.com.br (200.236.3.126) port 80 (#0)
> GET /posts HTTP/1.1
> Host: web1.kutzke.com.br
> User-Agent: curl/8.1.2
> Accept: */*
>
< HTTP/1.1 200 OK
< Server: nginx/1.25.1
< Date: Wed, 09 Aug 2023 23:01:58 GMT
< Content-Type: application/json; charset=utf-8
< Content-Length: 2089
< Connection: keep-alive
< X-Powered-By: Express
< Access-Control-Allow-Credentials: true
< Vary: Origin, Accept-Encoding
< Cache-Control: no-cache
< Pragma: no-cache
< Expires: -1
< X-Content-Type-Options: nosniff
< ETag: W/"829-XWvQChHrZAByd9CT44rC4X9NLyY"

-- ATUALIZAÇÕES ABAIXO --

[
  {
    "id": 1,
    "title": "json-server",
    "author": "typicode"
  },
  {
    "title": "Teste 1",
    "author": "Alex Kutzke",
    "id": 3
  },
  {
    "title": "Teste 2",
    "author": "Alex Kutzke",
    "id": 4
  },
  {
    "id": 7,
    "title": "jh",
    "author": "duas-caras"
  },
  {
    "id": 22
  },
  {
    "id": 23
  },
  {
    "author": "Ítalo",
    "title": "Alves",
    "id": 25
  },
  {
    "id": 26
  },
  {
    "title": "alguem",
    "id": 29
  },
  {
    "id": 31
  },
  {
    "'title": "joao%author=guerios'",
    "id": 34
  },
  {
    "title": "teste123",
    "author": "alexk",
    "id": 35
  },
  {
    "title": "teste123",
    "author": "matheushm",
    "id": 36
  },
  {
    "BGPO": "",
    "id": 41
  },
  {
    "title": "teste123",
    "author": "aleX",
    "id": 42
  },
  {
    "title": "teste123",
    "author": "alex",
    "id": 48
  },
  {
    "'author": "gabriel",
    "id": "Lnyo_Wt"
  },
  {
    "'title": "MaisUmTeste",
    "id": "cbBKlS3"
  },
  {
    "id": "qJ8SuGF"
  },
  {
    "'title": "teste12345",
    "id": "dfji6sP"
  },
  {
    "'title": "joao",
    "id": "2GxxGVt"
  },
  {
    "'title": "Pedro1'",
    "id": "BVjuKX-"
  },
  {
    "'title": "MaisUmTeste",
    "id": "R38AXAN"
  },
  {
    "'title": "teste123456789",
    "id": "juTpwcL"
  },
  {
    "'title": "joao",
    "id": "Ygwm6im"
  },
  {
    "'title": "joao",
    "id": "u6IK598"
  },
  {
    "id": "5mMb2MO"
  },
  {
    "author": "alterado",
    "id": "6uS5V2E"
  },
  {
    "'title": "Joao",
    "id": "EQhwUHT"
  },
  {
    "id": "nTjBvhE"
  },
  {
    "id": "KZpAZTj"
  },
  {
    "'author": "Wesley",
    "id": "PGG2tCz"
  },
  {
    "id": "Xhyu5xl"
  },
  {
    "id": "80SkW2W"
  },
  {
    "id": "gSh1mtU"
  },
  {
    "title": "teste123",
    "author": "alexkDD",
    "id": 54
  },
  {
    "id": 55
  },
  {
    "'title": "teste123",
    "id": 57
  },
  {
    "'title": "teste123",
    "id": 58
  },
  {
    "id": 60,
    "title": "titulo2 ",
    "author": "davi2"
  },
  {
    "'title": "teste123",
    "id": 61
  },
  {
    "'title": "teste123",
    "id": 62
  }
]* Connection #0 to host web1.kutzke.com.br left intact


```

### POST (criar)

```
$ curl -X POST -v web1.kutzke.com.br/posts -d 'title=testenovo&author=teste'
```

```
* Connected to web1.kutzke.com.br (200.236.3.126) port 80 (#0)
> POST /posts HTTP/1.1
> Host: web1.kutzke.com.br
> User-Agent: curl/8.1.2
> Accept: */*
> Content-Length: 28
> Content-Type: application/x-www-form-urlencoded
>
< HTTP/1.1 201 Created
< Server: nginx/1.25.1
< Date: Wed, 09 Aug 2023 23:07:39 GMT
< Content-Type: application/json; charset=utf-8
< Content-Length: 59
< Location: http://web1.kutzke.com.br/posts/63
< Connection: keep-alive
< X-Powered-By: Express
< Access-Control-Allow-Credentials: true
< Access-Control-Expose-Headers: Location
< Vary: Origin, X-HTTP-Method-Override, Accept-Encoding
< Cache-Control: no-cache
< Pragma: no-cache
< Expires: -1
< X-Content-Type-Options: nosniff
< ETag: W/"3b-x70QN84t4W0S05owccdtZ+ubj4w"
<
{
  "title": "testenovo",
  "author": "teste",
  "id": 63
}* Connection #0 to host web1.kutzke.com.br left intact
```

### GET com id (mostrar um registro específico)

```
$ curl -X GET -v web1.kutzke.com.br/posts/63
```

```
* Connected to web1.kutzke.com.br (200.236.3.126) port 80 (#0)
> GET /posts/63 HTTP/1.1
> Host: web1.kutzke.com.br
> User-Agent: curl/8.1.2
> Accept: */*
>
< HTTP/1.1 200 OK
< Server: nginx/1.25.1
< Date: Wed, 09 Aug 2023 23:08:59 GMT
< Content-Type: application/json; charset=utf-8
< Content-Length: 59
< Connection: keep-alive
< X-Powered-By: Express
< Access-Control-Allow-Credentials: true
< Vary: Origin, Accept-Encoding
< Cache-Control: no-cache
< Pragma: no-cache
< Expires: -1
< X-Content-Type-Options: nosniff
< ETag: W/"3b-x70QN84t4W0S05owccdtZ+ubj4w"
<
{
  "title": "testenovo",
  "author": "teste",
  "id": 63
}* Connection #0 to host web1.kutzke.com.br left intact

```

### PUT com id (alterar um registro específico)

```
$ curl -X PUT -v web1.kutzke.com.br/posts/63 -d 'title=alterandoaqui&author=alguem'
```

```
* Connected to web1.kutzke.com.br (200.236.3.126) port 80 (#0)
> PUT /posts/63 HTTP/1.1
> Host: web1.kutzke.com.br
> User-Agent: curl/8.1.2
> Accept: */*
> Content-Length: 33
> Content-Type: application/x-www-form-urlencoded
>
< HTTP/1.1 200 OK
< Server: nginx/1.25.1
< Date: Wed, 09 Aug 2023 23:13:55 GMT
< Content-Type: application/json; charset=utf-8
< Content-Length: 64
< Connection: keep-alive
< X-Powered-By: Express
< Access-Control-Allow-Credentials: true
< Vary: Origin, Accept-Encoding
< Cache-Control: no-cache
< Pragma: no-cache
< Expires: -1
< X-Content-Type-Options: nosniff
< ETag: W/"40-MICCMtZX5Es9V1ZkNi80PtBtmLk"
<
{
  "title": "alterandoaqui",
  "author": "alguem",
  "id": 63
}* Connection #0 to host web1.kutzke.com.br left intact
```

### DELETE com id (apagar um registro específico)

```
$ curl -X DELETE -v web1.kutzke.com.br/posts/63
```

```
* Connected to web1.kutzke.com.br (200.236.3.126) port 80 (#0)
> DELETE /posts/63 HTTP/1.1
> Host: web1.kutzke.com.br
> User-Agent: curl/8.1.2
> Accept: */*
>
< HTTP/1.1 200 OK
< Server: nginx/1.25.1
< Date: Wed, 09 Aug 2023 23:14:56 GMT
< Content-Type: application/json; charset=utf-8
< Content-Length: 2
< Connection: keep-alive
< X-Powered-By: Express
< Access-Control-Allow-Credentials: true
< Vary: Origin, Accept-Encoding
< Cache-Control: no-cache
< Pragma: no-cache
< Expires: -1
< X-Content-Type-Options: nosniff
< ETag: W/"2-vyGp6PvFo4RvsFtPoIWeCReyIC8"
<
{}* Connection #0 to host web1.kutzke.com.br left intact
```

