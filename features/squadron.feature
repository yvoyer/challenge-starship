#Feature: A squadron gives bonus to attack for all contained unit
#
#  Scenario: Attack gives +5 attack to all ships
#    Given The attacking ships are:
#      | quantity |    name       |
#      |   5      | 'Starfighter' |
#    And The defending ships are:
#      | quantity |    name        |
#      |   1      | 'Capital ship' |
#    When I attack the defending ships with 'Special attack'
#    Then The defending ships should have between 470 and 495 hp
#    And The defending ships should not be destroyed
