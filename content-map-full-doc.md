# San Bruno — Per-Route Content Map (FULL doc, all 28 tabs)

Doc: Google Doc 1GjgSbnm47vdW8Q41QlDDWHK2HLDakkYrX2jAi2ftRx4, fetched with includeTabsContent=true, 2026-11-12 ~19:45 PKT.
Total doc: 28 tabs, 43,314 words. The doc has ZERO hyperlink objects (verified by grep on the raw JSON).

## Verdict

**The user is RIGHT. Full per-page content exists for ALL 23 routes — 0 routes with NONE.**
The old build read ONLY Tab 1 (01 Homepage, ~3,051 words) and baked the wrong
"(homepage only, 3,060 words)" claim into data/pages.php. Tabs 2–28 (40,263 more words)
were never read. Every service page has a full tab (~1,530–1,630 words, 1 H1 + 13–19 H2s);
every area page has a full tab (~2,050–2,075 words); both resource pages have full tabs.

## Per-route map (23/23 matched)

| Route | Doc tab | Words | Tab H1 |
|---|---|---|---|
| `/` | 01 Homepage | 2956 | H1: 24/7 Water Damage Restoration in San Bruno, CA 94066 |
| `/emergency-water-extraction` | 05 Emergency Water Extraction | 1627 | H1: 24/7 Emergency Water Extraction in San Bruno, CA |
| `/structural-drying` | 06 Structural Drying | 1546 | H1: Emergency Water Mitigation and Structural Drying in San Bruno |
| `/burst-pipe-water-damage` | 07 Burst Pipe | 1539 | H1: Emergency Burst Pipe Water Damage Cleanup in San Bruno |
| `/sewage-backup-cleanup` | 08 Sewage Backup | 1534 | H1: 24/7 Sewage Backup Cleanup in San Bruno, CA |
| `/crawl-space-water-damage` | 09 Crawl Space | 1544 | H1: Emergency Crawl Space Water Damage Cleanup in San Bruno |
| `/storm-flood-water-damage` | 10 Storm & Flood | 1578 | H1: 24/7 Flood and Storm Damage Restoration in San Bruno, CA |
| `/garage-in-law-unit-flooding` | 11 Garage & In-Law Unit | 1582 | H1: Emergency Flooded Garage and In-Law Unit Cleanup in San Bruno |
| `/roof-leak-ceiling-water-damage` | 12 Roof Leak & Ceiling | 1540 | H1: Emergency Ceiling and Roof Leak Water Damage in San Bruno |
| `/slab-leak-hidden-leak-water-damage` | 13 Slab & Hidden Leak | 1573 | H1: Slab Leak and Hidden Leak Water Damage in San Bruno |
| `/water-heater-appliance-leak` | 14 Water Heater & Appliance | 1544 | H1: 24/7 Water Heater and Appliance Leak Cleanup in San Bruno |
| `/mold-remediation` | 15 Mold Remediation | 1570 | H1: Professional Mold Remediation in San Bruno, CA |
| `/condo-water-damage` | 16 Condo Water Damage | 1579 | H1: Emergency Condo and Apartment Water Damage Restoration in San Bruno |
| `/commercial-water-damage` | 17 Commercial | 1560 | H1: 24/7 Commercial Water Damage Restoration in San Bruno |
| `/hardwood-floor-water-damage` | 18 Hardwood Floor | 1582 | H1: Emergency Hardwood Floor Water Damage Drying in San Bruno |
| `/south-san-francisco-ca` | 19 South San Francisco | 2075 | H1: 24/7 Water Damage Restoration in South San Francisco, CA 94080 |
| `/millbrae-ca` | 20 Millbrae | 2058 | H1: Emergency Water Damage Restoration in Millbrae, CA 94030 |
| `/pacifica-ca` | 21 Pacifica | 2064 | H1: Rapid Water Damage Restoration in Pacifica, CA 94044 |
| `/burlingame-ca` | 22 Burlingame | 2049 | H1: Professional Water Damage Restoration in Burlingame, CA 94010 |
| `/brisbane-ca` | 23 Brisbane | 2056 | H1: Local Water Damage Restoration in Brisbane, CA 94005 |
| `/service-areas` | 04 Service Areas | 911 | H1: Water Damage Service Areas Around San Bruno, CA |
| `/resources/water-damage-restoration-cost-san-bruno` | 28 Blog - Cost Guide | 1061 | H1: How Much Does Water Damage Restoration Cost in San Bruno? |
| `/resources/belle-air-storm-flood-checklist` | 25 Blog - Belle Air Storm | 1017 | H1: Belle Air Storm Flooding Checklist: Before, During and After |

## Tabs with NO route built yet (content exists, page not built)

| Doc tab | Words | Tab H1 |
|---|---|---|
| 02 About | 1130 | H1: About Our San Bruno Water Damage Restoration Team |
| 03 Contact | 793 | H1: Contact a San Bruno Water Damage Crew 24/7 |
| 24 Blog - Sewer Lateral | 1125 | H1: San Bruno Sewer Lateral Inspection: What Home Sellers and Buyers Should Know |
| 26 Blog - Old Pipes | 1085 | H1: Warning Signs of Pipe Failure in 1950s San Bruno Homes |
| 27 Blog - Fog & Mold | 1036 | H1: How Peninsula Fog Leads to Mold and How to Prevent It |

Note: About (1,130w) and Contact (793w) tabs exist — the old build note claimed "no About / Contact / Privacy content" because Tab 1 has none; the tabs do. Privacy still has no tab. Three blog tabs (Sewer Lateral 1,125w, Old Pipes 1,085w, Fog & Mold 1,036w) have no routes; only Cost Guide and Belle Air were built as /resources/ pages.

## What the old read missed

- Old doc-raw.json (2026-11-11): NO `tabs` field, only `body` with 155 content elements = exactly Tab 1. The fetch did not pass includeTabsContent=true, so the API returned first-tab content only.
- Old extracted.txt (3,051 words) = Tab 1 only (verified: normalized text matches Tab 1; no Tab 2–28 H1 appears in it).
- Missed: 27 tabs, 40,263 words — 14 full service tabs, 5 full area tabs, About, Contact, Service Areas hub tab, and 5 blog tabs.
- Old word count "3,060" vs full doc 43,314: the old read saw 7% of the doc.
