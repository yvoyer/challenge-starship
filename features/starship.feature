Feature: The system must have a starfighter

  Scenario: Starfighter have base attack (1-10)
    Given I have 1 attacking 'Starfighter'
    And I have 1 defending 'Starfighter'
    When I attack the defending ship with 'Base attack'
    Then The defending 'Starfighter' should have between 15 and 20 hp
    And The defending 'Starfighter' should not be destroyed

  Scenario: Starfighter destroy target
    Given I have 100 attacking 'Starfighter'
    And I have 1 defending 'Starfighter'
    When I attack the defending ship with 'Base attack'
    Then The defending 'Starfighter' should be destroyed

  Scenario: Starfighter have special attack (25-50)
    Given I have 1 attacking 'Starfighter'
    And I have 1 defending 'Capital ship'
    When I attack the defending ship with 'Special attack'
    Then The defending 'Capital ship' should have between 470 and 495 hp
    And The defending 'Capital ship' should not be destroyed

  Scenario: Starfighter can attack once with special attack
    Given I have 1 attacking 'Starfighter'
    And I have 1 defending 'Starfighter'
    When I attack the defending ship with 'Special attack'
    Then I should not be able to attack again

