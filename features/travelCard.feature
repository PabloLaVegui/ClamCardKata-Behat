Feature: Contactless Travel Card
  In order to travel in London Underground
  As London Underground tickets manager
  I need to charge the client travels

  Rules:
  - Show README.md file

  Scenario: Michael makes a single journey from a station in the zone A to another station in zone A
    Given Michael has a Clamcard
    When Michael travels from "Asterisk" to "Aldgate"
    Then Michael will be charged £2.50 for his journey
