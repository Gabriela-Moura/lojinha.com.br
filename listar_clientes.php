<?php
#⠀⣤⣄⣴⣶⣿⣿⣶⣶⣦⣤⣤⣤⣶⣶⣶⣶⣶⣶⣶⣶⣾⣿⣿⣶⣀⣶⣆⣶⣦
#⠉⠻⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿
#⢀⣀⣼⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡇
#⠈⠛⠛⢿⣿⣿⣿⣿⣿⠛⡟⠛⢿⡿⠛⠛⠛⠛⠛⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
#⠀ ⢀⣿⣿⣿⣿⣿⣧⣀⣀⣀⡼⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
#   ⣼⣿⣿⣿⣿⣿⠋⠉⠉⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀╔═.𒅌. ═════════════╗⠀⠀⠀
#  ⢀⣿⣿⣿⣿⣿⣿⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀     ℳ𝒶𝓇𝒸ℴ𝓈 𝒱𝒾𝓃𝒾𝒸𝒾𝓊𝓈
#  ⢰⣿⣿⣿⣿⣿⡏⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀  𝒢𝓊𝒾𝓁𝒽ℯ𝓇𝓂ℯ ℬ𝒶𝓇𝓇ℯ𝓉ℴ
#  ⣼⣿⣿⣿⣿⣿⡇⠀⠀⠀⠀⠀⠀ ⠀⠀⠀⠀⠀  ╚═════════════.𒍜. ═╝ ⠀⠀⠀⠀
#  ⠉⠙⠛⠿⠿⣿⠇⠀⠀⠀⠀                 
      
#                              ░░╔══╗░░░░░░░░░░╔══╗░░
#                              ░╚╣▐▐╠╝░░╔══╗░░╚╣▐▐╠╝░
#                              ░░╚╦╦╝░░╚╣▌▌╠╝░░╚╦╦╝░░
#                              ░░░╚╚░░░░╚╦╦╝░░░░╚╚░░░
#                              ░░░░░░░░░░╝╝░░░░░░░░░░
echo"<link rel='stylesheet' href='listarclientes.css'>";
$arquivo = "clientes.json";
 
if(file_exists($arquivo)){
    $clientes = json_decode(file_get_contents($arquivo),true);

    echo "<h2>Lista de Clientes</h2>";
    echo "<ul>";
    foreach ($clientes as $c){
    echo "<li>{$c['idPessoa']} - {$c['nome']} - CPF: {$c['cpf']} - Saldo: {$c['saldo']}</li>";
}    
echo "</ul>";
} else {
echo "Nenhum cliente cadastrado.";
}
echo "<a href='index.html'>🔙 Voltar ao Menu</a>"
?>
