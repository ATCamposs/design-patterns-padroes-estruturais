# design-patterns-padroes-estruturais

*Adapter*

 - você quer usar uma classe existente, mas sua interface não corresponde á interface que necessita.
 - Você quer criar uma classe reutilizável que coopere com classes não relacionadas ou não previstas, ou seja, classes que não necessariamente tenham interfaces compatíveis.

 - (Somente para adaptadores de objetos) Você precisa usar várias subclasses existentes, porém, é impraticável adaptar essas interfaces, criando subclasses para cada uma. Um adaptador de objetos pode adaptar a interface da sua classe-mãe.
![alt text](imagemAdapter?raw=true)

*Bridge*

 - Desejar evitar um vinculo permanente entra uma abstração e sua implementação. Isso pode ocorrer, por exemplo, quando a implementação deve ser selecionada ou alterada em tempo de execução.
 - Tanto as abstrações como as suas implementações tiverem de ser extensiveis por meio de subclasse. Neste caso, o padrão bridge permite combinar as diferentes abstrações e implementações e estendê-las independentemente.
 - (C++) você deseja ocultar completamente a implementação de uma abstração dos clientes. Em C++, a representação de uma classe é visivel na interface da classe.
 - Desejar compartilhar uma implementação entre multiplos objetos(talvez usando a contagem de referencias) e este fato deve estar oculto do cliente.
![alt text](imagemBridge?raw=true)

 *Composite*

  - Quer representar hierarquias de "partes-todo" de objetos.
  - Quiser que os clientes sejam capazes de ignorar a diferença entre composições de objetos e objetos individuais. Os clientes tratarão todos os objetos na estrutura composta de maneira uniforme.
![alt text](imagemComposite?raw=true)

*Decorator*

 - Para acrescentar responsabilidade a objetos individuais de forma dinâmica e transparente, ou seja sem afetar outros objetos.
 - Para responsabilidades que podem ser removidas.
 - Quando a extensão através do uso de subclasse não é prática. As vezes, um grande número de extensões independentes é possível e isso poderia produzir uma explosão de subclasses para suportar a combinação. Ou a definição de uma classe pode estar oculta ou não estar disponível para a utilização de subclasses.
![alt text](imagemDecorator?raw=true)

*Facade*

 - Você deseja fornecer uma interface simples para um subsistema complexo. Os subsistemas se tornam mais complexos a medida que evoluem. A maioria dos padrões, quando aplicados, resulta em mais e menores classes. Isso torna o subsistema mais reutilizavel e mais facil de customizar, porém, também se torna mais difícil de usar para os clientes que não precisam customizá-lo. Uma fachada pode fornecer, por comportamento-padrão, uma visão simples do sistema, que é boa o suficiente para maioria dos clientes. Somente os clientes que demandarem maior customização necessitarão olhar além da fachada.
 - Existirem muitas dependencias entre clientes e classes de implementação de uma abstração. Ao introduzir uma fachada para desacoplar o subsistema dos clientes e dos outros subsistemas, estar-se-á promovendo a independência e portabilidade dos subsistemas.
![alt text](imagemFacade?raw=true)