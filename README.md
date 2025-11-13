# php72-to-82-rector

Questo progetto è pensato per facilitare la transizione del codice PHP dalla versione 7.2 alla 8.2 usando Rector, uno strumento potente per il refactoring automatico del codice.

## Struttura del progetto

- **src/**: Contiene il codice legacy che potrebbe richiedere refactoring.
  - **LegacyClass.php**: Definisce una classe con un metodo che dimostra codice legacy.
  - **functions.php**: Contiene una funzione standalone che funge da esempio di codice procedurale.
  - **traits/**: Contiene trait usati nel codice legacy.
    - **LegacyTrait.php**: Definisce un trait con un metodo che illustra l'uso dei trait.

- **tests/**: Contiene i test per il codice legacy e i fixture per Rector.
  - **LegacyClassTest.php**: Caso di test PHPUnit per `LegacyClass`.
  - **rector/**: Contiene fixture per l'analisi di Rector.
    - **fixtures/**: Contiene il codice PHP legacy e l'output atteso.
      - **legacy.php.inc**: Input per Rector.
      - **expected.php.inc**: Output atteso dopo il refactoring.

- **rector.php**: File di configurazione per Rector, che specifica le regole di migrazione.

- **composer.json**: Elenca le dipendenze richieste dal progetto, inclusi PHPUnit e Rector.

- **phpunit.xml.dist**: File di configurazione per PHPUnit, per impostare l'ambiente di test.

- **.editorconfig**: Definisce stili di codifica e regole di formattazione.

- **.gitattributes**: Specifica gli attributi per Git.

## Istruzioni di setup

1. Clonare il repository:
   ```
   git clone <repository-url>
   cd php72-to-82-rector
   ```

2. Installare le dipendenze con Composer:
   ```
   composer install
   ```

3. Eseguire Rector per analizzare e refattorizzare il codice legacy:
   ```
   vendor/bin/rector process src
   ```

   dry run:
   ```
   ./vendor/bin/rector process src --config rector.php --dry-run
   ```
   per vedere le modifiche proposte senza applicarle.

4. Eseguire i test per verificare che tutto funzioni come previsto:
   ```
   vendor/bin/phpunit
   ```

## Linee guida d'uso

- Usa i test forniti per verificare che il codice legacy si comporti come previsto dopo il refactoring.
- Modifica la configurazione di Rector in `rector.php` per personalizzare il processo di migrazione in base alle esigenze del progetto.
- Controlla l'output in `expected.php.inc` per capire le modifiche apportate da Rector.

Questo progetto serve come esempio pratico per l'aggiornamento del codice PHP e può essere esteso per includere altro codice legacy e test secondo necessità.