#Feature: An army gives bonus to attack for all contained unit
#  Background: Requirements for an army
#    Given I have 100 starfighter
#    And I have 5 capital ship
#
#  Scenario: All ships gain 5 absorbs points
#    Given I have 1 defending 'Capital ship'
#    When I attack with special attack
#    Then The defending 'Capital ship' should have between 0 and 0 hp
#    And The defending 'Capital ship' should be destroyed
