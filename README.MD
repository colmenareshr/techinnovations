# Site WordPress para Tech Innovations 

Este é um site WordPress da TechInnovations, uma startup fictícia de desenvolvimento e consultoria de software.

## Instalação

1. Clone este repositório em seu ambiente WordPress local ou baixe o arquivo .zip e carregue-o em **Aparência > Temas**.
2. Ative o tema infantil 'techinnovations'.
3. Ative os seguintes plug-ins:
   - Yoast SEO
   - Contact Form 7
   - WP Optimize
   - Secure Custom Fields
4. Importe o arquivo XML (`techinnovations.xml`) fornecido para obter o conteúdo de amostra (está localizado nos arquivos do tema):
   - Vá em **Ferramentas > Importar**
   - Carregue o arquivo `techinnovations.xml`


## Personalização feita

- Um tema (mobile first) foi criado do zero.
- Cores e estilos foram customizados para se adequarem à paleta TechInnovations proposta no briefing utilizando Tailwind CSS como framework de estilo.
- Implementei uma seção dinâmica na página inicial para mostrar os projetos mais recentes.
- Foi criado um Custom Post Type para os serviços da empresa, listando cada serviço na página de serviços.
- Desempenho otimizado do site por meio de cache e otimização de imagens.

## Plug-ins instalados

- **Yoast SEO**: Para otimização básica de SEO.
- **Formulário de Contato 7**: Para o formulário de contato.
- **WP Optimize**: Para melhorar o tempo de carregamento do site, otimizando imagens e minimizando arquivos CSS e JS.

## Editando o Site com Tailwind CSS

### Requisitos para Edição com Tailwind CSS

1. **Instalar Dependências**: Este tema utiliza Tailwind CSS para estilos. Para editar o CSS, você deve instalar as dependências do Tailwind. No terminal, navegue até a pasta do tema e execute:
- npm install -D tailwindcss postcss autoprefixer
