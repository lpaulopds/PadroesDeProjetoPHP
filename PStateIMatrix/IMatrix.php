<?php
// Página 264

/**Embora essa implementação do padrão de projeto State tenha nove estados,
 * um para cada uma das nove células, um único estado precisa somente de,
 * no máximo, quatro transições.
 */

// Interface para os estados

interface IMatrix
{
    public function goUp();
    public function goDown();
    public function goLeft();
    public function goRight();
}
