<?

    abstract class EnergyType {
        const Colorless   = 0;
        const Darkness    = 1;
        const Dragon      = 2;
        const Fairy       = 3;
        const Fighting    = 4;
        const Fire        = 5;
        const Lightning   = 6;
        const Metal       = 7;
        const Psychic     = 8;
        const Water       = 9; 
    }

    public static isValid(int $tester) {
        if($tester < 0 || $tester > 9) return false;
        return true;
    }
             

?>
