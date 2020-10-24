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