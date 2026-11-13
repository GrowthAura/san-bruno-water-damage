<?php
// San Bruno Water Damage Restoration — site and page data.
// Written fresh for this site. All visible copy is verbatim from the
// Google Doc "San Bruno Water Damage – Website Content" (28 tabs,
// 42,417 words, full read with includeTabsContent=true). Nothing here is
// invented: no street address, no Privacy content (no tab), no reviews,
// no rates beyond the doc's own cost range ($1,500 to $6,000, kept on the
// cost page only). Inner pages carry their OWN tab's full content verbatim.
// En dashes in the doc's neighbourhood lines are rendered as commas at
// build time; no word is changed. Button 1 shows ONLY the phone number;
// Button 2 ("Request Emergency Help") is its equal.

$SITE = [
    'brand'       => 'San Bruno Water Damage Restoration',
    'brand_small' => 'WATER DAMAGE RESTORATION',
    'city'        => 'San Bruno',
    'state'       => 'CA',
    'zip'         => '94066',
    'county'      => 'San Mateo County',
    'phone'       => '(650) 822-6798',
    'phone_href'  => 'tel:+16508226798',
    'phone_plain' => '6508226798',
    'hours'       => '24/7',
    'map_query'   => 'San Bruno, CA 94066',
    'url'         => 'https://www.sanbrunowaterdamagerestoration.us',
];

$HOME_META = [
    'title'       => 'Water Damage Restoration San Bruno, CA | 24/7 Emergency Response',
    'description' => '24/7 water damage restoration in San Bruno, CA 94066. Burst pipes, floods, sewage and crawl spaces. Call (650) 822-6798 for immediate help.',
    'eyebrow'     => 'WATER DAMAGE RESTORATION • SAN BRUNO, CALIFORNIA',
    'h1'          => '24/7 Water Damage Restoration in San Bruno, CA 94066',
    'intro'       => 'A burst pipe in Mills Park, a flooded garage in Crestmoor, sewage coming up a floor drain in Belle Air. When water gets inside, every hour matters. Our water damage restoration San Bruno crews handle extraction, drying, mold prevention and repairs for homes and businesses across 94066. Call now and a crew is dispatched immediately, day or night.',
];

$TRUST = [
    '24/7 Phone Line',
    'Serving San Bruno 94066 & the North Peninsula',
    'Homes, Condos & Businesses',
    'Photo & Moisture Records for Your Claim',
];

$FIRST_STEPS = [
    'h2' => 'What should you do first when water damage hits a San Bruno home?',
    'paras' => [
        'Stop the water source, shut off power to wet areas, move valuables to a dry spot, take photos, then call (650) 822-6798 so extraction and drying start before mold sets in.',
        'Most damage after a leak happens in the first 24 to 48 hours. Drywall wicks water upward, hardwood starts to cup, and the cool, foggy air on the Peninsula keeps everything damp longer than it would inland. These quick steps limit what needs to be torn out later:',
    ],
    'bullets' => [
        'Find the main water shutoff. In most San Bruno homes it sits near the front of the house, in the garage, or at the meter box by the street. Turn it clockwise until it stops.',
        'Cut the power to wet rooms at the breaker panel, but only if you can reach the panel without standing in water.',
        'Lift furniture legs onto foil or wood blocks and pull rugs, books and electronics off wet floors.',
        'Photograph everything before anything is moved or thrown out: the source, the standing water, the walls and the contents.',
        'Stay away from sewage. If the water came from a toilet, floor drain or sewer line, keep children and pets out of the area.',
        'Call for extraction. Household fans and shop vacs can\'t pull water out of wall cavities, subfloors or crawl spaces.',
    ],
];

// 14 service cards. 'body' is the paragraph before its closing link
// sentence; 'sentence' is that closing sentence verbatim; 'anchor' is the
// 3-5 word span inside it that carries the link.
$SERVICES = [
    [
        'slug' => '/emergency-water-extraction',
        'nav'  => 'Emergency Water Extraction',
        'h3'   => 'Emergency Water Extraction in San Bruno',
        'body' => 'Truck-mounted and portable pumps remove standing water from carpet, pad, hard floors and garages, so drying can start the same visit.',
        'sentence' => 'Learn more about emergency water extraction',
        'anchor'   => 'emergency water extraction',
    ],
    [
        'slug' => '/structural-drying',
        'nav'  => 'Water Mitigation & Structural Drying',
        'h3'   => 'Water Mitigation and Structural Drying in San Bruno',
        'body' => 'Air movers, dehumidifiers and daily moisture readings dry walls, subfloors and framing to normal levels, which matters in a fog-belt climate where air rarely dries things on its own.',
        'sentence' => 'See water mitigation and structural drying',
        'anchor'   => 'water mitigation and structural drying',
    ],
    [
        'slug' => '/burst-pipe-water-damage',
        'nav'  => 'Burst Pipe Water Damage',
        'h3'   => 'Burst Pipe Water Damage in San Bruno',
        'body' => 'Many homes here still run on original galvanized supply lines that corrode from the inside and split without warning.',
        'sentence' => 'Read about burst pipe water damage cleanup',
        'anchor'   => 'burst pipe water damage',
    ],
    [
        'slug' => '/sewage-backup-cleanup',
        'nav'  => 'Sewage Backup Cleanup',
        'h3'   => 'Sewage Backup Cleanup in San Bruno',
        'body' => 'Category 3 water from a toilet, floor drain or failed sewer lateral is cleaned out, disinfected and dried with full protective gear.',
        'sentence' => 'Details on sewage backup cleanup',
        'anchor'   => 'sewage backup cleanup',
    ],
    [
        'slug' => '/crawl-space-water-damage',
        'nav'  => 'Crawl Space Water Damage',
        'h3'   => 'Crawl Space Water Damage in San Bruno',
        'body' => 'Raised ranch homes in Crestmoor, Rollingwood and along Skyline Boulevard often collect water underneath after heavy rain. That water is pumped out and the space is dried before it feeds mold into the floors above.',
        'sentence' => 'Read about crawl space water damage',
        'anchor'   => 'crawl space water damage',
    ],
    [
        'slug' => '/storm-flood-water-damage',
        'nav'  => 'Storm & Flood Damage Restoration',
        'h3'   => 'Storm and Flood Damage Restoration in San Bruno',
        'body' => 'Winter storms, high tides along San Bruno Creek and blocked street drains push water into homes and garages, especially in the lower parts of the city.',
        'sentence' => 'See storm and flood damage restoration',
        'anchor'   => 'storm and flood damage restoration',
    ],
    [
        'slug' => '/garage-in-law-unit-flooding',
        'nav'  => 'Flooded Garage & In-Law Unit Cleanup',
        'h3'   => 'Flooded Garage and In-Law Unit Cleanup in San Bruno',
        'body' => 'Downhill lots catch runoff from the streets above, and converted garages and in-law units sit right at ground level.',
        'sentence' => 'Learn about flooded garage and in-law unit cleanup',
        'anchor'   => 'flooded garage and in-law unit',
    ],
    [
        'slug' => '/roof-leak-ceiling-water-damage',
        'nav'  => 'Roof Leak & Ceiling Water Damage',
        'h3'   => 'Roof Leak and Ceiling Water Damage in San Bruno',
        'body' => 'Wind-driven rain off the western hills finds gaps in roofing and flashing, soaking attic insulation and staining ceilings.',
        'sentence' => 'Read about ceiling and roof leak water damage',
        'anchor'   => 'roof leak water damage',
    ],
    [
        'slug' => '/slab-leak-hidden-leak-water-damage',
        'nav'  => 'Slab Leak & Hidden Leak Water Damage',
        'h3'   => 'Slab Leak and Hidden Leak Water Damage in San Bruno',
        'body' => 'Warm spots on the floor, a rising water bill or the sound of running water with every tap closed can point to a leak under the slab or inside a wall.',
        'sentence' => 'See slab leak and hidden leak water damage',
        'anchor'   => 'slab leak and hidden leak',
    ],
    [
        'slug' => '/water-heater-appliance-leak',
        'nav'  => 'Water Heater & Appliance Leak Cleanup',
        'h3'   => 'Water Heater and Appliance Leak Cleanup in San Bruno',
        'body' => 'Failed water heaters in garages and closets, burst washing machine hoses, dishwasher leaks and refrigerator lines.',
        'sentence' => 'Learn about water heater and appliance leak cleanup',
        'anchor'   => 'water heater and appliance leak',
    ],
    [
        'slug' => '/mold-remediation',
        'nav'  => 'Mold Remediation',
        'h3'   => 'Mold Remediation in San Bruno',
        'body' => 'Mold can start growing on wet drywall and wood within two to three days. Affected materials are contained, removed and treated, and the moisture source is corrected.',
        'sentence' => 'Read about mold remediation',
        'anchor'   => 'mold remediation',
    ],
    [
        'slug' => '/condo-water-damage',
        'nav'  => 'Condo & Apartment Water Damage',
        'h3'   => 'Condo and Apartment Water Damage in San Bruno',
        'body' => 'Leaks that travel between units in Shelter Creek and other multi-unit buildings need careful moisture tracing and clear records for the owner and the HOA.',
        'sentence' => 'See condo water damage restoration',
        'anchor'   => 'condo water damage restoration',
    ],
    [
        'slug' => '/commercial-water-damage',
        'nav'  => 'Commercial Water Damage',
        'h3'   => 'Commercial Water Damage in San Bruno',
        'body' => 'Shops on San Mateo Avenue, restaurants and offices along El Camino Real, and businesses near Tanforan and Bayhill can schedule work after hours to keep doors open.',
        'sentence' => 'Learn about commercial water damage restoration',
        'anchor'   => 'commercial water damage restoration',
    ],
    [
        'slug' => '/hardwood-floor-water-damage',
        'nav'  => 'Hardwood Floor Water Damage',
        'h3'   => 'Hardwood Floor Water Damage in San Bruno',
        'body' => 'Original oak floors in post-war homes can often be dried in place with floor mat systems before they cup or buckle.',
        'sentence' => 'Read about hardwood floor water damage drying',
        'anchor'   => 'hardwood floor water damage',
    ],
];

$SERVICES_H2    = 'Water Damage Restoration San Bruno Services';
$SERVICES_INTRO = 'Every water loss is different. A slow leak behind a vanity needs a different plan than a creek overflow in Belle Air or a sewer backup in a 1950s ranch house. Here is the full range of work our crews handle across San Bruno:';

$WHY_H2    = 'Why Are San Bruno Homes Prone to Water Damage?';
$WHY_INTRO = 'San Bruno is mostly a city of post-war homes. The typical house was built in the late 1950s, and more than half of local housing dates from the 1940s through the 1960s. That age shapes the kind of water damage people here deal with.';
$WHY_REASONS = [
    ['h3' => 'Aging Pipes and Sewer Lines',
     'text' => 'Galvanized steel supply pipes rust from the inside, narrowing until a joint fails. Cast iron drain lines crack, and older clay or cast iron sewer laterals let roots in. The city requires a sewer lateral inspection when a home is sold, and the private lateral from the house to the main is the owner\'s responsibility. A cracked or root-blocked lateral is one of the most common causes of sewage backups here.'],
    ['h3' => 'Crawl Spaces Under Raised Homes',
     'text' => 'Many mid-century ranches in Crestmoor, Rollingwood and the western hills sit over crawl spaces rather than slabs. Rain runs downhill, collects under the house and sits there unseen. Weeks later the first sign is often a musty smell or soft flooring.'],
    ['h3' => 'San Bruno Creek and Low-Lying Streets',
     'text' => 'Stormwater from much of the city drains to San Bruno Creek, which empties into the Bay near SFO. When heavy rain lines up with a high tide, the creek backs up. Belle Air and the streets around 7th Avenue and SR-380 have dealt with repeated flooding, and San Bruno Avenue near Huntington Avenue has closed during big storms.'],
    ['h3' => 'Hillside Runoff',
     'text' => 'Neighborhoods built into the hills, including Crestmoor, Portola Highlands and Pacific Heights, send a lot of water downhill in a short time. Homes on the low side of the street, with garages or in-law units at grade, take the brunt of it.'],
    ['h3' => 'Fog, Marine Layer and Slow Drying',
     'text' => 'The northern and western parts of San Bruno sit in the Peninsula fog belt. Cool, humid air means a wet wall or subfloor does not dry out by itself, and mold has more time to start. Proper drying here takes dehumidifiers and moisture checks, not open windows.'],
];

$PROCESS_H2    = 'How the Water Damage Restoration Process Works';
$PROCESS_INTRO = 'Whether it is a single bathroom leak or a whole-floor flood, the work follows the same core steps.';
$PROCESS_STEPS = [
    ['h3' => '1. Emergency Call and Dispatch',
     'text' => 'You call (650) 822-6798 and describe what happened. A crew is dispatched immediately with pumps, drying equipment and protective gear.'],
    ['h3' => '2. Inspection and Moisture Mapping',
     'text' => 'The crew stops the source if it is still active, checks for electrical hazards, and uses moisture meters and thermal imaging to find out how far the water spread behind walls and under floors.'],
    ['h3' => '3. Water Extraction',
     'text' => 'Standing water is pumped and vacuumed out of floors, carpet, pad and crawl spaces. The more water removed now, the shorter the drying time.'],
    ['h3' => '4. Removal of Unsalvageable Materials',
     'text' => 'Wet pad, swollen baseboards, saturated insulation and drywall below the water line are removed when they cannot be dried. Anything touched by sewage is handled under Category 3 rules.'],
    ['h3' => '5. Structural Drying and Dehumidification',
     'text' => 'Air movers and dehumidifiers are set up and readings are taken each day until wood, drywall and subfloor reach normal moisture levels. This usually takes three to five days.'],
    ['h3' => '6. Cleaning, Sanitizing and Mold Prevention',
     'text' => 'Surfaces are cleaned and treated with antimicrobial products to stop mold and bacteria growth.'],
    ['h3' => '7. Repairs and Rebuild',
     'text' => 'Drywall, baseboards, flooring and paint are put back so the room looks the way it did before the loss.'],
];

$CATEGORIES_H2    = 'What Are the Three Categories of Water Damage?';
$CATEGORIES_INTRO = 'The IICRC S500 standard, the main industry reference for water damage work, sorts water by how contaminated it is. The category decides how the job is handled.';
$CATEGORIES_BULLETS = [
    'Category 1, clean water: broken supply lines, burst pipes, overflowing sinks, rainwater. Lowest risk if handled quickly.',
    'Category 2, gray water: washing machine and dishwasher discharge, toilet overflow without waste, sump pump failures. Contains contaminants that can make people sick.',
    'Category 3, black water: sewage, creek and flood water from outside, and any water left standing long enough to grow bacteria. Porous materials it touches usually have to be removed.',
];
$CATEGORIES_CLOSE = 'Clean water turns into gray or black water when it sits. A pipe leak left for several days can become a Category 3 job, which is one more reason to start extraction early.';

$HOODS_H2    = 'Neighborhoods We Serve in San Bruno';
$HOODS_INTRO = 'Crews cover every part of San Bruno, ZIP 94066, from the flats near the Bay to the homes along Skyline Boulevard:';
$HOODS = [
    'San Bruno Park, the city\'s oldest area around downtown and San Mateo Avenue, with homes from the 1920s to the 1950s',
    'Belle Air and Lomita Park, low-lying neighborhoods near SFO and San Bruno Creek',
    'Crestmoor and Shelter Creek, mid-century ranches, hillside lots and the Shelter Creek condominiums',
    'Rollingwood, 1950s and 1960s ranch homes on hilly streets near I-280',
    'Portola Highlands, larger 1960s homes backing onto open space in the western hills',
    'Mills Park and Huntington Park, some of the first suburban neighborhoods, near El Camino Real',
    'Pacific Heights, hillside homes on the western edge of the city',
    'Tanforan and Bayhill, shopping, offices and apartments near the San Bruno BART station',
];
$HOODS_HUB_LINE = ['text' => 'See the full list on our service areas page.',
    'anchor' => 'service areas page', 'href' => '/service-areas'];

$NEARBY_H2    = 'Water Damage Help in Nearby Peninsula Cities';
$NEARBY_INTRO = 'The same crews also work in the cities around San Bruno:';
$AREAS = [
    ['slug' => '/south-san-francisco-ca', 'city' => 'South San Francisco', 'zip' => '94080',
     'line' => 'South San Francisco, 94080', 'anchor' => 'South San Francisco'],
    ['slug' => '/millbrae-ca', 'city' => 'Millbrae', 'zip' => '94030',
     'line' => 'Millbrae, 94030', 'anchor' => 'Millbrae'],
    ['slug' => '/pacifica-ca', 'city' => 'Pacifica', 'zip' => '94044',
     'line' => 'Pacifica, 94044', 'anchor' => 'Pacifica'],
    ['slug' => '/burlingame-ca', 'city' => 'Burlingame', 'zip' => '94010',
     'line' => 'Burlingame, 94010', 'anchor' => 'Burlingame'],
    ['slug' => '/brisbane-ca', 'city' => 'Brisbane', 'zip' => '94005',
     'line' => 'Brisbane, 94005', 'anchor' => 'Brisbane'],
];

$BUSINESS_H2 = 'Water Damage Repair San Bruno, CA: Help for Local Businesses';
$BUSINESS_PARA = 'A leak in a restaurant kitchen, a sprinkler line break in an office or a flooded storeroom can shut a business down fast. For commercial properties in San Bruno, CA, water damage repair is planned around your hours. Crews can work overnight and on weekends, section off wet areas so the rest of the space stays open, and keep moisture logs for your records. This covers retail on San Mateo Avenue, offices along El Camino Real and near Bayhill, businesses around Tanforan, and hotels and warehouses close to SFO.';

$INSURANCE_H2 = 'Will Homeowners Insurance Pay for Water Damage in California?';
$INSURANCE_PARAS = [
    'Most homeowners policies cover sudden and accidental water damage, such as a burst pipe or a failed water heater. Damage from slow leaks over time, poor maintenance or outside flooding is often excluded, and flood coverage usually needs a separate policy.',
    'Every policy is different, so check yours or call your agent. What helps any claim is good documentation. On every job our crew records:',
];
$INSURANCE_BULLETS = [
    'Photos of the source and damaged areas before work starts',
    'Moisture readings taken each day of drying',
    'A list of removed materials and affected contents',
    'A written scope of the work completed',
];
$INSURANCE_CLOSE = 'You can share this record with your adjuster. The decision on coverage always stays between you and your insurance company.';

$COST_H2 = 'How Much Does Water Damage Restoration Cost in San Bruno?';
$COST_PARA = ['text' => 'Costs depend on how much area is wet, the water category, how long drying takes, and what has to be removed and rebuilt. As a rough guide, cleanup and drying for one or two rooms of clean water often runs somewhere between $1,500 and $6,000, while sewage, crawl space or whole-floor losses with rebuild work run higher. You get a clear scope before any major work begins. For a full breakdown of what drives the price, read our water damage cost guide.',
    'anchor' => 'water damage cost guide', 'href' => '/resources/water-damage-restoration-cost-san-bruno'];

$STORM_H2    = 'Storm Season Tips for San Bruno Homeowners';
$STORM_INTRO = 'Most of San Bruno\'s flooding happens between November and March, when atmospheric river storms roll in off the Pacific. A little prep before the season starts goes a long way:';
$STORM_BULLETS = [
    'Clear gutters, downspouts and the storm drain in front of your house.',
    'Pick up sandbags early. The city has historically offered them behind Fire Station 51 at 555 El Camino Real.',
    'Check that crawl space vents and foundation drains are not blocked.',
    'Test your sump pump if you have one, and keep a battery backup ready.',
    'Know where your main water shutoff and breaker panel are.',
    'If you live near San Bruno Creek, keep valuables off garage and ground floors during storm warnings.',
];
$STORM_CLOSE = ['text' => 'More detail is in our Belle Air storm checklist.',
    'anchor' => 'Belle Air storm checklist', 'href' => '/resources/belle-air-storm-flood-checklist'];

$CHOOSING_H2    = 'Choosing a Water Damage Company in San Bruno';
$CHOOSING_INTRO = 'When you are standing in a wet hallway it is hard to compare options. A few questions help you choose the right water damage company in San Bruno:';
$CHOOSING_BULLETS = [
    'Do they answer the phone at night and on weekends?',
    'Do they measure moisture inside walls and floors, or just set up fans?',
    'Will they explain the water category and what has to be removed?',
    'Do they keep photo and moisture records for your claim?',
    'Can they handle the job from extraction through repairs, so you are not juggling several contractors?',
];
$CHOOSING_CLOSE = 'Our crews work through each of these on every job, from a small leak to a full flood.';

$FAQ_H2 = 'Frequently Asked Questions About Water Damage in San Bruno';
$FAQS = [
    ['q' => 'How quickly can a crew get to my San Bruno home?',
     'a' => 'A crew is dispatched immediately after your call to (650) 822-6798, with a 24/7 water damage service line answered day and night, including weekends and holidays.'],
    ['q' => 'How long does it take to dry a house after water damage?',
     'a' => 'Most homes take three to five days of drying. Crawl spaces, hardwood floors, sewage jobs and homes in foggy neighborhoods can take longer.'],
    ['q' => 'Can I clean up water damage myself?',
     'a' => 'Small clean-water spills on hard floors can be handled with towels and a wet vac. Water inside walls, under floors, in a crawl space or from sewage needs professional water damage cleanup and drying equipment to prevent mold.'],
    ['q' => 'Will my carpet need to be thrown out?',
     'a' => 'Carpet soaked with clean water can often be dried and saved, though the pad underneath is usually replaced. Carpet touched by sewage or floodwater has to be removed.'],
    ['q' => 'How soon does mold start after a leak?',
     'a' => 'Mold can begin growing within 24 to 72 hours on wet drywall, wood and carpet, and San Bruno\'s humid, foggy air can speed that up.'],
    ['q' => 'Who is responsible for a sewer backup in San Bruno?',
     'a' => 'In San Bruno the private sewer lateral running from the house to the city main belongs to the property owner. A blockage in that line is generally the owner\'s responsibility, while a problem in the public main is the city\'s.'],
    ['q' => 'Which San Bruno neighborhoods flood the most?',
     'a' => 'Belle Air and the low streets near San Bruno Creek, 7th Avenue and SR-380 see the most flooding. Downhill homes in hillside neighborhoods often get runoff in garages and crawl spaces.'],
    ['q' => 'Do you work on condos and rental properties?',
     'a' => 'Yes. Condos, apartments, in-law units and rental homes are all covered, with moisture records owners, tenants and HOAs can share.'],
    ['q' => 'Do you handle commercial properties?',
     'a' => 'Yes. Offices, retail stores, restaurants and other commercial spaces across San Bruno are covered, with after-hours scheduling when needed.'],
];

$FINAL_CTA_H2 = 'Call Now for Water Damage Restoration in San Bruno';
$FINAL_CTA_PARAS = [
    'Water does more damage with every hour it sits, and fast water damage restoration San Bruno homeowners can reach keeps a dry-out from turning into a full rebuild. If your home or business in San Bruno has a burst pipe, a flooded crawl space, a sewer backup or storm water coming in, call (650) 822-6798 now. A crew is dispatched immediately to start extraction and drying anywhere in 94066 and the surrounding Peninsula cities.',
];

// Cost guide skeleton: the homepage cost section IS its whole content.
$COST_GUIDE = [
    'slug' => '/resources/water-damage-restoration-cost-san-bruno',
    'h1'   => 'How Much Does Water Damage Restoration Cost in San Bruno?',
    'para' => $COST_PARA,
];

// Belle Air checklist skeleton: the homepage storm-tips section IS its
// whole content (intro + tips + closing line).
$STORM_GUIDE = [
    'slug' => '/resources/belle-air-storm-flood-checklist',
    'h1'   => 'Belle Air Storm Flood Checklist',
    'intro' => $STORM_INTRO,
    'bullets' => $STORM_BULLETS,
    'close' => $STORM_CLOSE,
];

// ---- Full tab content (rebuild 2026-11-12) ---------------------------
// One entry per inner page. 'blocks' renders in doc order: h2 / h3 / p /
// ul / faq. Paragraphs and list items carry their doc links as
// ['text' => ..., 'links' => [['anchor' => ..., 'href' => ...], ...]].
// FAQ items render as accordions; their Q&A also feed FAQPage schema.
$PAGE_CONTENT = [
    '/about' => [
        'type' => 'about',
        'kind' => 'about',
        'h1' => 'About Our San Bruno Water Damage Restoration Team',
        'meta' => [
            'title' => 'About Our San Bruno Water Damage Restoration Team | North Peninsula',
            'description' => 'Meet the San Bruno water damage restoration team serving 94066 and the North Peninsula around the clock. Call (650) 822-6798 for help today.',
        ],
        'blocks' => [
            [
                'p' => 'Water damage rarely shows up at a convenient time. It comes at 2 a.m. from a split supply line, during a January storm through a garage door, or as a slow leak nobody noticed behind a wall. Our San Bruno water damage restoration team was built for those moments: answering the phone around the clock, dispatching a crew immediately, and walking you through every step until your home or business is dry and repaired.',
            ],
            [
                'h2' => 'Who handles water damage restoration across San Bruno and the North Peninsula?',
            ],
            [
                'p' => 'A local restoration crew covering San Bruno 94066 and nearby South San Francisco, Millbrae, Pacifica, Burlingame and Brisbane handles extraction, drying, mold work and repairs, 24 hours a day.',
            ],
            [
                'p' => 'The Peninsula has its own set of water problems. Homes here are older than in most of the Bay Area, the fog keeps things damp, hillside streets send runoff downhill, and low neighborhoods near the Bay deal with creek backups during storms. Working in the same handful of cities every week means the crew knows what a crawl space under a Crestmoor ranch looks like after a storm, how sewer laterals in San Bruno Park tend to fail, and why a wet wall in Pacifica takes longer to dry than the same wall in San Jose.',
            ],
            [
                'h2' => 'What We Do',
            ],
            [
                'p' => 'The work covers the full path from the first call to the final coat of paint, so you are not left coordinating several different companies while your home sits torn apart.',
            ],
            [
                'ul' => [
                    'Emergency water extraction from floors, carpet, garages and crawl spaces',
                    'Structural drying with air movers, dehumidifiers and daily moisture readings',
                    'Burst pipe, slab leak and appliance leak cleanup',
                    'Sewage backup cleanup and sanitizing',
                    'Storm and flood water damage, including runoff into garages and in-law units',
                    'Roof leak and ceiling water damage',
                    'Mold remediation after water damage',
                    'Condo, apartment and commercial water damage',
                    'Hardwood floor drying and repairs after the dry-out',
                ],
            ],
            [
                'h2' => 'How We Work',
            ],
            [
                'p' => 'Every job, large or small, is run on the same handful of principles. They are simple, but they make the difference between a job that feels under control and one that feels chaotic.',
            ],
            [
                'h3' => 'A Crew Is Dispatched Immediately',
            ],
            [
                'p' => 'When you call (650) 822-6798, a real person answers, asks a few questions about what happened, and a crew is dispatched immediately with extraction and drying equipment. Nights, weekends and holidays work the same way.',
            ],
            [
                'h3' => 'We Measure Instead of Guessing',
            ],
            [
                'p' => 'Water travels further than it looks. Moisture meters and thermal imaging show how far it spread into walls, cabinets, subfloors and crawl spaces. Drying is tracked with readings every day until materials are back to normal, not just until the surface feels dry.',
            ],
            [
                'h3' => 'You Get a Written Scope',
            ],
            [
                'p' => 'Before any major tear-out or rebuild starts, you get a clear written scope of what needs to be done and why. If something can be dried and saved, it is saved.',
            ],
            [
                'h3' => 'Plain Language, No Pressure',
            ],
            [
                'p' => 'Water damage comes with a lot of jargon: categories, classes, mitigation, remediation. The crew explains what each step means for your home in plain terms, and you make the decisions.',
            ],
            [
                'h3' => 'Records You Can Use',
            ],
            [
                'p' => 'Photos, moisture logs, lists of removed materials and a final scope are kept for every job, so you have a clean record to share with your insurance adjuster, landlord, HOA or property manager.',
            ],
            [
                'h2' => 'Where We Work',
            ],
            [
                'p' => 'The crew covers every neighborhood in San Bruno, from San Bruno Park and Belle Air near the Bay to Crestmoor, Rollingwood, Portola Highlands and Pacific Heights in the hills. As a restoration company serving San Bruno CA and the surrounding cities, the team also works in:',
            ],
            [
                'ul' => [
                    'South San Francisco, 94080',
                    'Millbrae, 94030',
                    'Pacifica, 94044',
                    'Burlingame, 94010',
                    'Brisbane, 94005',
                ],
            ],
            [
                'p' => [
                    'text' => 'The full list is on the service areas page.',
                    'links' => [
                        [
                            'anchor' => 'service areas page',
                            'href' => '/service-areas',
                            'pos' => 43,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Homes, Condos and Businesses',
            ],
            [
                'p' => [
                    'text' => 'Most calls come from homeowners, but a large part of the work is in condos, apartments and rentals, where water moves between units and several people need the same information. On the commercial side, the crew works with shops, restaurants, offices and hotels that need to stay open while drying happens. Details are on the commercial water damage page.',
                    'links' => [
                        [
                            'anchor' => 'commercial water damage',
                            'href' => '/commercial-water-damage',
                            'pos' => 354,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Why Local Matters for Water Damage',
            ],
            [
                'p' => 'A restoration company serving San Bruno CA every week sees patterns that an out-of-area crew would miss. A few examples:',
            ],
            [
                'ul' => [
                    'Many homes here were built in the 1950s with galvanized supply pipes that are now failing from the inside.',
                    'Raised ranch homes in the hills often sit over crawl spaces that collect rainwater without anyone noticing.',
                    'The private sewer lateral from a house to the city main is the owner\'s responsibility in San Bruno, so backups are common in older homes.',
                    'Neighborhoods that drain to San Bruno Creek can flood when heavy rain lines up with a high tide.',
                    'Coastal fog slows drying, which means dehumidifiers matter more here than in drier parts of the Bay Area.',
                ],
            ],
            [
                'p' => 'Knowing these patterns helps the team find hidden moisture faster and recommend fixes that stop the same problem from coming back.',
            ],
            [
                'h2' => 'Frequently Asked Questions',
            ],
            [
                'faq' => [
                    'q' => 'Do you answer calls at night and on weekends?',
                    'a' => [
                        'Yes. The phone line at (650) 822-6798 is answered 24 hours a day, every day of the year, and a crew is dispatched immediately.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Do you handle the repairs after drying?',
                    'a' => [
                        'Yes. Drywall, baseboards, flooring and paint can be put back after the dry-out, so one team handles the job from start to finish.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Do you work with insurance companies?',
                    'a' => [
                        'The crew documents every job with photos, moisture readings and a written scope you can share with your adjuster. Coverage decisions are always between you and your insurance company.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'What makes you different from other water damage specialists on the Peninsula?',
                    'a' => [
                        'The focus is narrow on purpose: water damage in a small group of North Peninsula cities, measured drying, clear records, and plain explanations. You can decide for yourself whether that fits what you need.',
                    ],
                ],
            ],
            [
                'h2' => 'Talk to Our San Bruno Water Damage Restoration Team',
            ],
            [
                'p' => 'If water is coming in right now, or you found damage that needs a closer look, call (650) 822-6798. Our San Bruno water damage restoration team will dispatch a crew immediately and start with a clear plan.',
            ],
        ],
        'eyebrow' => 'CRESTLINE PENINSULA RESTORATION • SAN BRUNO, CALIFORNIA',
        'crumb' => 'About',
    ],
    '/contact' => [
        'type' => 'contact',
        'kind' => 'contact',
        'h1' => 'Contact a San Bruno Water Damage Crew 24/7',
        'meta' => [
            'title' => 'Contact a San Bruno Water Damage Crew | Call 24/7',
            'description' => 'Need help with water damage in San Bruno, CA 94066? Call (650) 822-6798 any time, day or night, and a crew is dispatched immediately.',
        ],
        'blocks' => [
            [
                'p' => 'Water damage gets worse every hour it sits. The fastest way to get help is to call. A real person answers around the clock, asks a few quick questions, and a crew is dispatched immediately to homes and businesses in San Bruno 94066 and the nearby North Peninsula cities.',
            ],
            [
                'h2' => 'How do you reach a water damage crew in San Bruno at night?',
            ],
            [
                'p' => 'Call (650) 822-6798. The line is answered 24 hours a day, including weekends and holidays, and a crew is dispatched immediately with extraction and drying equipment.',
            ],
            [
                'p' => 'Phone: (650) 822-6798',
            ],
            [
                'p' => 'Hours: Open 24 hours, 7 days a week',
            ],
            [
                'p' => 'Service area: San Bruno and the North Peninsula',
            ],
            [
                'h2' => 'What to Have Ready When You Call',
            ],
            [
                'p' => 'You do not need all of this, but these details help the crew arrive with the right equipment:',
            ],
            [
                'ul' => [
                    'Your address and the best phone number to reach you',
                    'Where the water is coming from, if you know (pipe, toilet, water heater, roof, outside flooding, sewer drain)',
                    'Whether the water is still running or has been shut off',
                    'Roughly how many rooms or floors are wet',
                    'Whether there is a crawl space, basement or garage involved',
                    'Whether the water looks clean, gray or contains sewage',
                    'Whether anyone in the home is elderly, very young or has breathing problems',
                ],
            ],
            [
                'h2' => 'What Happens After You Call',
            ],
            [
                'h3' => 'Step 1: Quick Questions',
            ],
            [
                'p' => 'The person on the phone asks about the source, the size of the area and any safety concerns, and gives you simple steps to take until the crew arrives.',
            ],
            [
                'h3' => 'Step 2: Crew Dispatched',
            ],
            [
                'p' => 'A crew is dispatched immediately with pumps, air movers, dehumidifiers and protective gear.',
            ],
            [
                'h3' => 'Step 3: Inspection on Site',
            ],
            [
                'p' => 'The crew stops the source if it is still active, checks for electrical hazards and maps the moisture with meters and thermal imaging.',
            ],
            [
                'h3' => 'Step 4: Plan and Scope',
            ],
            [
                'p' => 'You get a clear explanation of what needs to be extracted, dried, removed or repaired, and a written scope before major work begins.',
            ],
            [
                'h2' => 'Steps to Take While You Wait',
            ],
            [
                'ul' => [
                    'Shut off the main water valve if the source is a pipe or fixture.',
                    'Turn off power to wet rooms at the breaker panel if you can do it without standing in water.',
                    'Move valuables, electronics and documents to a dry area.',
                    'Take photos and video of the damage before anything is moved.',
                    'Keep children and pets away from sewage or floodwater.',
                    'Do not use a household vacuum on standing water.',
                ],
            ],
            [
                'p' => [
                    'text' => 'More detail on what to do first is in the emergency water extraction guide.',
                    'links' => [
                        [
                            'anchor' => 'emergency water extraction',
                            'href' => '/emergency-water-extraction',
                            'pos' => 75,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Areas We Serve',
            ],
            [
                'p' => 'The crew works in every San Bruno neighborhood and in these nearby cities:',
            ],
            [
                'ul' => [
                    'San Bruno, 94066',
                    'South San Francisco, 94080',
                    'Millbrae, 94030',
                    'Pacifica, 94044',
                    'Burlingame, 94010',
                    'Brisbane, 94005',
                ],
            ],
            [
                'p' => [
                    'text' => 'See the neighborhood list on the service areas page.',
                    'links' => [
                        [
                            'anchor' => 'service areas page',
                            'href' => '/service-areas',
                            'pos' => 52,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Emergency Water Damage Phone for San Bruno, CA',
            ],
            [
                'p' => 'Save this number in your phone now so you have it when you need it. The emergency water damage phone for San Bruno, CA is (650) 822-6798, and it works for every kind of water problem:',
            ],
            [
                'ul' => [
                    'Burst and leaking pipes',
                    'Sewage and sewer backups',
                    'Storm and flood water',
                    'Crawl space and garage flooding',
                    'Roof leaks and wet ceilings',
                    'Water heater and appliance leaks',
                    'Mold after water damage',
                    'Condo, apartment and commercial losses',
                ],
            ],
            [
                'h2' => 'Contact FAQs',
            ],
            [
                'faq' => [
                    'q' => 'Is the 24/7 water damage hotline really answered at night?',
                    'a' => [
                        'Yes. Calls to (650) 822-6798 are answered around the clock, and a crew is dispatched immediately, including on holidays.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Can I call if I am not sure the damage is serious?',
                    'a' => [
                        'Yes. Describe what you see and the person on the phone will tell you whether it needs a crew right away or whether it can wait.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Do you serve businesses as well as homes?',
                    'a' => [
                        'Yes. Homes, condos, apartments, offices, shops and restaurants are all covered.',
                    ],
                ],
            ],
            [
                'h2' => 'Call Now',
            ],
            [
                'p' => 'If you need to contact a San Bruno water damage crew right now, call (650) 822-6798. The sooner extraction and drying start, the less has to be torn out and replaced. Keep the emergency water damage phone for San Bruno, CA handy, and reach a San Bruno water damage crew any time water gets where it should not be.',
            ],
        ],
        'eyebrow' => 'EMERGENCY WATER DAMAGE HELP • SAN BRUNO, CALIFORNIA',
        'crumb' => 'Contact',
    ],
    '/service-areas' => [
        'type' => 'area-hub',
        'kind' => 'area-hub',
        'h1' => 'Water Damage Service Areas Around San Bruno, CA',
        'meta' => [
            'title' => 'Water Damage Service Areas San Bruno | North Peninsula Coverage',
            'description' => 'Water damage service areas around San Bruno 94066: South San Francisco, Millbrae, Pacifica, Burlingame and Brisbane. Call (650) 822-6798 24/7.',
        ],
        'blocks' => [
            [
                'p' => 'From the flats by SFO to the hillside streets off Skyline Boulevard, our water damage service areas cover all of San Bruno 94066 and five neighboring Peninsula cities. A crew is dispatched immediately, day or night, for burst pipes, sewer backups, storm flooding, crawl space water and more.',
            ],
            [
                'h2' => 'Which neighborhoods and nearby cities does the San Bruno crew cover?',
            ],
            [
                'p' => 'The crew covers every neighborhood in San Bruno 94066, plus South San Francisco, Millbrae, Pacifica, Burlingame and Brisbane, with 24/7 response for homes and businesses.',
            ],
            [
                'p' => 'The North Peninsula is a compact area, but water damage looks different from one neighborhood to the next. Older homes near downtown deal with failing pipes and sewer laterals. Low areas near the Bay deal with creek backups during storms. Hillside homes deal with runoff and crawl space water. Coastal neighborhoods deal with fog and slow drying. Knowing these differences helps the crew find hidden moisture faster.',
            ],
            [
                'h2' => 'San Bruno Neighborhoods We Serve',
            ],
            [
                'h3' => 'San Bruno Park and Downtown',
            ],
            [
                'p' => 'The city\'s oldest area, around San Mateo Avenue and the downtown blocks, has homes from the 1920s through the 1950s. Common calls here are burst galvanized pipes, cast iron drain leaks and sewer lateral backups.',
            ],
            [
                'h3' => 'Belle Air and Lomita Park',
            ],
            [
                'p' => 'These low-lying neighborhoods near SFO and San Bruno Creek see storm water, street flooding and backups when heavy rain lines up with high tides. Garages and ground floors take the most damage.',
            ],
            [
                'h3' => 'Crestmoor and Shelter Creek',
            ],
            [
                'p' => 'Mid-century ranches on hillside lots and the Shelter Creek condominiums. Crawl space water, downhill runoff and unit-to-unit leaks are the main problems here.',
            ],
            [
                'h3' => 'Rollingwood',
            ],
            [
                'p' => 'Ranch homes from the 1950s and 1960s on hilly streets near I-280. Crawl spaces, roof leaks from wind-driven rain and older plumbing are common.',
            ],
            [
                'h3' => 'Portola Highlands',
            ],
            [
                'p' => 'Larger 1960s homes in the western hills backing onto open space. Runoff, crawl spaces and fog-related moisture show up often.',
            ],
            [
                'h3' => 'Mills Park and Huntington Park',
            ],
            [
                'p' => 'Some of the city\'s first suburban neighborhoods, close to El Camino Real. Older pipes, hardwood floors and slab or hidden leaks are typical calls.',
            ],
            [
                'h3' => 'Pacific Heights',
            ],
            [
                'p' => 'Hillside homes on the western edge of town where storm runoff and foggy conditions combine.',
            ],
            [
                'h3' => 'Tanforan and Bayhill',
            ],
            [
                'p' => 'Shopping, offices and apartment buildings near the San Bruno BART station, where commercial and multi-unit water damage is the main concern.',
            ],
            [
                'h2' => 'Nearby Cities We Serve',
            ],
            [
                'h3' => 'South San Francisco, 94080',
            ],
            [
                'p' => [
                    'text' => 'Homes in the hills around Westborough and Serra Highlands, the Grand Avenue downtown, and a large commercial and biotech area east of US-101. Storm flooding along Colma Creek and commercial losses are common. See water damage restoration in South San Francisco.',
                    'links' => [
                        [
                            'anchor' => 'South San Francisco',
                            'href' => '/south-san-francisco-ca',
                            'pos' => 261,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Millbrae, 94030',
            ],
            [
                'p' => [
                    'text' => 'Hillside neighborhoods, Broadway and El Camino Real, and condos near the BART and Caltrain station. Downhill runoff and multi-unit leaks show up often. See water damage restoration in Millbrae.',
                    'links' => [
                        [
                            'anchor' => 'Millbrae',
                            'href' => '/millbrae-ca',
                            'pos' => 193,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Pacifica, 94044',
            ],
            [
                'p' => [
                    'text' => 'Linda Mar, Sharp Park, Rockaway Beach and Pedro Point along Highway 1. Coastal fog, crawl spaces and creek flooding make mold a constant concern. See water damage restoration in Pacifica.',
                    'links' => [
                        [
                            'anchor' => 'Pacifica',
                            'href' => '/pacifica-ca',
                            'pos' => 187,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Burlingame, 94010',
            ],
            [
                'p' => [
                    'text' => 'Older homes with basements and hardwood floors, plus the Burlingame Avenue and Broadway business districts and hotels along the Bayfront. See water damage restoration in Burlingame.',
                    'links' => [
                        [
                            'anchor' => 'Burlingame',
                            'href' => '/burlingame-ca',
                            'pos' => 181,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Brisbane, 94005',
            ],
            [
                'p' => [
                    'text' => 'A small hillside town on the slopes of San Bruno Mountain, with offices at Sierra Point and homes in Central Brisbane that catch heavy runoff. See water damage restoration in Brisbane.',
                    'links' => [
                        [
                            'anchor' => 'Brisbane',
                            'href' => '/brisbane-ca',
                            'pos' => 184,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Water Damage Restoration Across the North Peninsula, CA',
            ],
            [
                'p' => 'Every service is available in every city on this page. Water damage restoration across the North Peninsula, CA includes:',
            ],
            [
                'ul' => [
                    [
                        'text' => 'Emergency water extraction',
                        'links' => [
                            [
                                'anchor' => 'Emergency water extraction',
                                'href' => '/emergency-water-extraction',
                                'pos' => 27,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Structural drying and water mitigation',
                        'links' => [
                            [
                                'anchor' => 'Structural drying',
                                'href' => '/structural-drying',
                                'pos' => 39,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Burst pipe water damage',
                        'links' => [
                            [
                                'anchor' => 'Burst pipe water damage',
                                'href' => '/burst-pipe-water-damage',
                                'pos' => 24,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Sewage backup cleanup',
                        'links' => [
                            [
                                'anchor' => 'Sewage backup cleanup',
                                'href' => '/sewage-backup-cleanup',
                                'pos' => 22,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Crawl space water damage',
                        'links' => [
                            [
                                'anchor' => 'Crawl space water damage',
                                'href' => '/crawl-space-water-damage',
                                'pos' => 25,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Storm and flood damage',
                        'links' => [
                            [
                                'anchor' => 'Storm and flood damage',
                                'href' => '/storm-flood-water-damage',
                                'pos' => 23,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Mold remediation',
                        'links' => [
                            [
                                'anchor' => 'Mold remediation',
                                'href' => '/mold-remediation',
                                'pos' => 17,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Commercial water damage',
                        'links' => [
                            [
                                'anchor' => 'Commercial water damage',
                                'href' => '/commercial-water-damage',
                                'pos' => 24,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Not Sure If You Are in Our Area?',
            ],
            [
                'p' => 'If your home or business is close to any of these water damage service areas in San Bruno and the surrounding cities, call (650) 822-6798 and ask. Nearby parts of San Mateo County outside these ZIP codes can often be covered as well, depending on the job.',
            ],
            [
                'h2' => 'Service Area FAQs',
            ],
            [
                'faq' => [
                    'q' => 'How far outside San Bruno do you travel?',
                    'a' => [
                        'The crew regularly covers South San Francisco, Millbrae, Pacifica, Burlingame and Brisbane. For other San Mateo County water damage calls, ask when you phone in.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Is response the same in every city?',
                    'a' => [
                        'Yes. In every city on this page a crew is dispatched immediately after your call, at any hour.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Do you serve commercial properties in all of these areas?',
                    'a' => [
                        'Yes. Offices, shops, restaurants, hotels and multi-unit buildings are covered across the whole service area.',
                    ],
                ],
            ],
            [
                'h2' => 'Call for Water Damage Help Anywhere on the North Peninsula',
            ],
            [
                'p' => 'Wherever you are within our water damage service areas around San Bruno, call (650) 822-6798 and a crew is dispatched immediately.',
            ],
        ],
        'eyebrow' => 'WATER DAMAGE SERVICE AREAS • SAN BRUNO, CALIFORNIA',
        'crumb' => 'Service Areas',
    ],
    '/emergency-water-extraction' => [
        'type' => 'service',
        'kind' => 'service',
        'h1' => '24/7 Emergency Water Extraction in San Bruno, CA',
        'meta' => [
            'title' => 'Emergency Water Extraction San Bruno | 24/7 Water Removal',
            'description' => '24/7 emergency water extraction in San Bruno, CA 94066. Standing water pulled from floors, carpet, garages and crawl spaces. Call (650) 822-6798.',
        ],
        'blocks' => [
            [
                'p' => 'Standing water in your living room, a soaked carpet after a supply line burst, or a garage filling up during a storm. Our emergency water extraction San Bruno crews pull the water out fast with truck-mounted and portable pumps so drying can start right away. Call any time and a crew is dispatched immediately.',
            ],
            [
                'h2' => 'How fast should standing water be removed from a San Bruno home?',
            ],
            [
                'p' => 'Within the first few hours. Water starts wicking into drywall within minutes, and mold can begin in 24 to 72 hours, faster in San Bruno\'s foggy, humid neighborhoods.',
            ],
            [
                'p' => 'The first hours after a leak decide how big the job becomes. Water that sits on a floor moves sideways under baseboards, soaks into carpet pad, seeps between hardwood boards and climbs drywall like a sponge. In a raised home it drips through the subfloor into the crawl space below. The faster the bulk water comes out, the less material has to be cut out and replaced, and the shorter the drying time.',
            ],
            [
                'h2' => 'When You Need Emergency Water Removal in San Bruno, CA',
            ],
            [
                'p' => 'Call for water removal in San Bruno, CA when you see any of these:',
            ],
            [
                'ul' => [
                    'Standing water on floors, in a garage or in a crawl space',
                    'Carpet that squishes when you walk on it',
                    'Water coming through a ceiling or light fixture',
                    'A burst pipe, failed water heater or broken washing machine hose',
                    'Sewage coming up through a toilet, shower or floor drain',
                    'Storm water entering through doors, garages or foundation walls',
                    'Water in an in-law unit or converted garage at ground level',
                ],
            ],
            [
                'h2' => 'Equipment Used for Water Extraction',
            ],
            [
                'p' => 'The right tool depends on how much water there is and where it sits.',
            ],
            [
                'h3' => 'Truck-Mounted Extraction Units',
            ],
            [
                'p' => 'Powerful units that stay outside in the truck and pull large volumes of water through long hoses. These are used for whole-floor losses, flooded garages and big commercial spaces.',
            ],
            [
                'h3' => 'Portable Extractors',
            ],
            [
                'p' => 'Smaller units that can be carried upstairs, into condos, or into tight spaces like hallways and closets where a truck hose cannot reach easily.',
            ],
            [
                'h3' => 'Submersible Pumps',
            ],
            [
                'p' => 'Used when water is several inches deep, such as in a flooded garage, crawl space or below-grade room.',
            ],
            [
                'h3' => 'Weighted Carpet Extraction Tools',
            ],
            [
                'p' => 'Tools the technician stands on to press water out of carpet and pad, pulling far more water than a wand alone.',
            ],
            [
                'h3' => 'Moisture Meters and Thermal Cameras',
            ],
            [
                'p' => 'Used during and after extraction to find water that moved under cabinets, behind baseboards and into walls.',
            ],
            [
                'h2' => 'Where Water Hides in San Bruno Homes',
            ],
            [
                'p' => 'Most homes in San Bruno were built between the 1940s and 1960s. That age shapes where water ends up after a leak.',
            ],
            [
                'h3' => 'Under Carpet and Pad',
            ],
            [
                'p' => 'Wall-to-wall carpet over old pad holds a surprising amount of water. Extraction pulls most of it, but wet pad usually needs to be replaced.',
            ],
            [
                'h3' => 'Beneath Raised Floors',
            ],
            [
                'p' => [
                    'text' => 'Many ranch homes in Crestmoor, Rollingwood and the western hills sit over crawl spaces. Water that soaks through the floor collects on the soil below and keeps the house damp for weeks unless it is pumped and dried. More on that is in the crawl space water damage guide.',
                    'links' => [
                        [
                            'anchor' => 'crawl space water damage guide',
                            'href' => '/crawl-space-water-damage',
                            'pos' => 270,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'In Garages and Ground-Level Units',
            ],
            [
                'p' => 'Garages, converted garages and in-law units sit at grade. In storms, runoff from the street and driveway pools here first.',
            ],
            [
                'h3' => 'Behind Cabinets and Walls',
            ],
            [
                'p' => 'Kitchen and bathroom cabinets trap water under their bases. Drywall wicks water upward several inches above the visible water line.',
            ],
            [
                'h2' => 'Extraction by Surface Type',
            ],
            [
                'h3' => 'Carpet',
            ],
            [
                'p' => 'Carpet soaked with clean water can often be extracted, dried in place and saved. The pad underneath is usually removed. Carpet that touched sewage or outside floodwater must be removed for health reasons.',
            ],
            [
                'h3' => 'Hardwood',
            ],
            [
                'p' => [
                    'text' => 'Hardwood needs fast extraction followed by specialized drying mats to pull water out of the boards before they cup. See the hardwood floor water damage page.',
                    'links' => [
                        [
                            'anchor' => 'hardwood floor water damage',
                            'href' => '/hardwood-floor-water-damage',
                            'pos' => 157,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Tile and Vinyl',
            ],
            [
                'p' => 'Water on tile or vinyl looks easy to clean, but it often slips through grout lines and seams into the subfloor underneath, so moisture readings are taken after extraction.',
            ],
            [
                'h3' => 'Concrete',
            ],
            [
                'p' => 'Garage and slab floors are extracted and squeegeed, then dried with dehumidifiers so moisture does not move into walls and stored items.',
            ],
            [
                'h2' => 'What Happens After Extraction',
            ],
            [
                'p' => [
                    'text' => 'Extraction removes the bulk water, but the materials stay wet inside. The next step is structural drying with air movers and dehumidifiers, checked every day with moisture readings. In San Bruno\'s cool, foggy climate this step matters even more because the air does not dry things on its own. Learn more on the structural drying page.',
                    'links' => [
                        [
                            'anchor' => 'structural drying',
                            'href' => '/structural-drying',
                            'pos' => 334,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Clean Water, Gray Water and Sewage',
            ],
            [
                'p' => 'The source of the water changes how extraction is done:',
            ],
            [
                'ul' => [
                    'Clean water from a supply line or rain is extracted and dried, with most materials often saved.',
                    'Gray water from appliances or a toilet overflow without waste needs extraction plus cleaning and sanitizing.',
                    [
                        'text' => 'Black water, including sewage and outside floodwater, needs protective gear, removal of porous materials and disinfection. See sewage backup cleanup.',
                        'links' => [
                            [
                                'anchor' => 'sewage backup cleanup',
                                'href' => '/sewage-backup-cleanup',
                                'pos' => 149,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Storm Season Extraction',
            ],
            [
                'p' => [
                    'text' => 'Most emergency water extraction San Bruno calls in winter come from storms. Heavy rain can push water into garages, crawl spaces and ground floors, especially in low areas near San Bruno Creek and on the downhill side of hillside streets. The storm and flood damage page covers that in detail.',
                    'links' => [
                        [
                            'anchor' => 'storm and flood damage',
                            'href' => '/storm-flood-water-damage',
                            'pos' => 293,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Commercial Water Extraction',
            ],
            [
                'p' => [
                    'text' => 'Shops, restaurants and offices along El Camino Real, San Mateo Avenue and around Tanforan can have large areas flooded by a sprinkler line, a water heater or a storm. Extraction can be scheduled overnight or in sections so the business stays open. See commercial water damage.',
                    'links' => [
                        [
                            'anchor' => 'commercial water damage',
                            'href' => '/commercial-water-damage',
                            'pos' => 276,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'What to Do Before the Crew Arrives',
            ],
            [
                'ul' => [
                    'Shut off the main water valve if a pipe or fixture is the source.',
                    'Turn off power to wet rooms at the breaker if you can do so safely.',
                    'Lift furniture off wet carpet and put foil or wood blocks under the legs.',
                    'Move rugs, electronics, papers and photos to a dry area.',
                    'Take photos and video of the water before cleanup begins.',
                    'Do not use a household vacuum on standing water.',
                    'Stay out of sewage and floodwater.',
                ],
            ],
            [
                'h2' => 'Emergency Water Extraction FAQs',
            ],
            [
                'faq' => [
                    'q' => 'How long does water extraction take?',
                    'a' => [
                        'Most single-room jobs take one to three hours. Whole-floor losses, flooded garages and crawl spaces can take longer, followed by several days of drying.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Can I just use a shop vac?',
                    'a' => [
                        'A shop vac helps with small spills on hard floors, but it cannot pull water out of carpet pad, subfloors or wall cavities. Standing water removal from those areas needs professional equipment.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Will my carpet be saved?',
                    'a' => [
                        'Carpet soaked with clean water is often dried and saved. The pad is usually replaced. Carpet touched by sewage or floodwater is removed.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Do you extract water from crawl spaces?',
                    'a' => [
                        'Yes. Crawl spaces are pumped out, and then dried with dehumidifiers to protect the floor framing above.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'How much does water extraction cost?',
                    'a' => [
                        [
                            'text' => 'It depends on the size of the area, the water category and the materials. See the water damage cost guide for typical ranges.',
                            'links' => [
                                [
                                    'anchor' => 'water damage cost guide',
                                    'href' => '/resources/water-damage-restoration-cost-san-bruno',
                                    'pos' => 125,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'How Much Water Do Floors and Walls Actually Hold?',
            ],
            [
                'p' => 'People are often surprised by how much water hides in a room that looks only damp. A single room of carpet and pad can hold many gallons after a leak. Drywall acts like a wick and can pull water several inches up the wall above the visible line. Wood subfloors and framing absorb water slowly, but they release it slowly too, which is why they need days of dehumidification. This is the reason extraction comes first: every gallon pulled out with equipment is a gallon that does not have to be evaporated over the next several days.',
            ],
            [
                'h2' => 'Extraction in Condos and Upper Floors',
            ],
            [
                'p' => 'When a leak happens on an upper floor or in a condo, water rarely stays where it started. It moves through the floor into the ceiling below, along joists, and into neighboring walls. Extraction on upper floors uses portable units that can be carried up stairs, and the crew checks the rooms and units below at the same time. In buildings like the Shelter Creek condos, getting to the unit below quickly can save its ceiling and keep a one-unit loss from becoming a two-unit loss.',
            ],
            [
                'h2' => 'Signs Water Is Still Hiding After Cleanup',
            ],
            [
                'p' => 'Even after the standing water is gone, watch for these signs that moisture is still trapped:',
            ],
            [
                'ul' => [
                    'Baseboards that stay dark or swollen',
                    'Paint bubbling a few days after the leak',
                    'A musty smell that gets stronger instead of weaker',
                    'Floors that feel cold or soft underfoot',
                    'Condensation on windows in the affected room',
                ],
            ],
            [
                'p' => 'If you notice any of these, call (650) 822-6798 for moisture readings before mold has a chance to start.',
            ],
            [
                'h2' => 'Call for Emergency Water Extraction in San Bruno Now',
            ],
            [
                'p' => 'Every hour water sits, more material soaks it up. For emergency water extraction in San Bruno and fast water removal in San Bruno, CA, call (650) 822-6798. A crew is dispatched immediately to start pulling water out and setting up drying.',
            ],
        ],
        'eyebrow' => 'EMERGENCY WATER EXTRACTION • SAN BRUNO, CALIFORNIA',
    ],
    '/structural-drying' => [
        'type' => 'service',
        'kind' => 'service',
        'h1' => 'Emergency Water Mitigation and Structural Drying in San Bruno',
        'meta' => [
            'title' => 'Water Mitigation San Bruno | 24/7 Structural Drying & Dehumidification',
            'description' => 'Water mitigation in San Bruno, CA 94066. Structural drying, dehumidifiers and daily moisture checks built for foggy Peninsula homes. Call (650) 822-6798.',
        ],
        'blocks' => [
            [
                'p' => 'Once the standing water is gone, the real work starts. Walls, subfloors, framing and cabinets are still holding water you cannot see. Our water mitigation San Bruno crews set up air movers and dehumidifiers, take moisture readings every day, and keep drying until your home is back to normal. Call any time and a crew is dispatched immediately.',
            ],
            [
                'h2' => 'How long does it take to dry a water-damaged house in San Bruno\'s foggy climate?',
            ],
            [
                'p' => 'Most homes take three to five days. Crawl spaces, hardwood, plaster walls and homes in the foggy western hills often need a few extra days of dehumidification.',
            ],
            [
                'p' => 'San Bruno sits right in the path of the Pacific marine layer. On many days the outdoor air is cool and close to saturated, which means opening windows does almost nothing to dry a wet house. In some cases it pushes more moisture inside. That is why drying here depends on closed-room dehumidification and careful measuring, not on fans alone.',
            ],
            [
                'h2' => 'What Is Water Mitigation?',
            ],
            [
                'p' => 'Water mitigation is the work done right after a water loss to stop the damage from spreading. It covers extraction, removing materials that cannot be saved, and drying the structure. Restoration and repair come after. Doing mitigation well is what keeps a burst pipe from turning into a mold problem and a full rebuild.',
            ],
            [
                'p' => 'Mitigation usually includes:',
            ],
            [
                'ul' => [
                    'Stopping or isolating the water source',
                    'Extracting standing water',
                    'Removing wet carpet pad, swollen baseboards and saturated insulation',
                    'Opening small holes or flood cuts in drywall where water is trapped inside',
                    'Setting up air movers and dehumidifiers',
                    'Applying antimicrobial treatment to prevent mold',
                    'Taking moisture readings every day until materials reach normal levels',
                ],
            ],
            [
                'h2' => 'How Structural Drying Works',
            ],
            [
                'p' => 'Structural drying in San Bruno, CA follows a simple idea: move moisture out of materials into the air, then pull it out of the air.',
            ],
            [
                'h3' => 'Air Movers',
            ],
            [
                'p' => 'High-velocity fans blow across wet surfaces, speeding up evaporation from carpet, drywall, wood and concrete.',
            ],
            [
                'h3' => 'Dehumidifiers',
            ],
            [
                'p' => 'Low-grain refrigerant and desiccant dehumidifiers pull the evaporated moisture out of the air. Without them, the moisture just moves from the floor into the walls and ceiling.',
            ],
            [
                'h3' => 'Injection and Wall Cavity Drying',
            ],
            [
                'p' => 'When water is trapped inside walls or under cabinets, small holes are drilled and dry air is forced inside. This often saves drywall and cabinets that would otherwise be torn out.',
            ],
            [
                'h3' => 'Hardwood Floor Mats',
            ],
            [
                'p' => 'Panels with suction pull moisture up through hardwood boards before they cup or buckle.',
            ],
            [
                'h3' => 'Containment',
            ],
            [
                'p' => 'Plastic sheeting closes off the drying area. This keeps the dehumidifiers working on a small volume of air, which speeds things up and keeps the rest of the house comfortable.',
            ],
            [
                'h2' => 'Why Drying Takes Longer on the Peninsula',
            ],
            [
                'p' => 'Dehumidification after water damage matters everywhere, but a few local factors make it critical in San Bruno:',
            ],
            [
                'ul' => [
                    'Fog and marine layer: the northern and western neighborhoods sit in cool, damp air for much of the year.',
                    'Crawl spaces: raised homes in Crestmoor, Rollingwood and along Skyline Boulevard have soil underneath that holds moisture.',
                    'Older materials: plaster walls, old-growth framing and original oak floors in post-war homes hold water differently than modern drywall.',
                    'Cool temperatures: evaporation slows in a cold house, so drying equipment often needs a little heat to work well.',
                ],
            ],
            [
                'h2' => 'Moisture Readings and When Drying Is Done',
            ],
            [
                'p' => 'Drying is not done when a surface feels dry. It is done when readings inside the materials match normal, unaffected materials in the same home. Each day the crew:',
            ],
            [
                'ul' => [
                    'Measures moisture in walls, floors, framing and cabinets',
                    'Records temperature and humidity inside the drying area',
                    'Moves or adds equipment where readings are slow to drop',
                    'Logs everything with photos for your records',
                ],
            ],
            [
                'p' => 'These logs are useful for insurance claims and for any future buyer who wants to know the home was dried properly.',
            ],
            [
                'h2' => 'What Can Usually Be Saved',
            ],
            [
                'p' => 'Good structural drying in San Bruno, CA saves more of your home than people expect:',
            ],
            [
                'ul' => [
                    'Drywall wet for a short time with clean water',
                    'Wall framing and subfloors',
                    'Hardwood floors caught early',
                    'Cabinets, when dried from underneath and inside',
                    'Carpet soaked with clean water (the pad is usually replaced)',
                ],
            ],
            [
                'p' => 'What usually cannot be saved:',
            ],
            [
                'ul' => [
                    'Anything soaked by sewage or outside floodwater',
                    'Insulation that is soaked through',
                    'Particleboard that has swollen',
                    'Drywall that has started to grow mold',
                ],
            ],
            [
                'h2' => 'Water Mitigation for Condos, Rentals and Businesses',
            ],
            [
                'p' => [
                    'text' => 'In condos like those in Shelter Creek, water often moves into the unit below or next door. Drying has to be coordinated between units, and the moisture logs help owners and HOAs understand who was affected. In businesses along El Camino Real or near Tanforan, drying can be set up in sections so the space stays open. See condo water damage and commercial water damage.',
                    'links' => [
                        [
                            'anchor' => 'condo water damage',
                            'href' => '/condo-water-damage',
                            'pos' => 341,
                        ],
                        [
                            'anchor' => 'commercial water damage',
                            'href' => '/commercial-water-damage',
                            'pos' => 433,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Mitigation and Mold Prevention',
            ],
            [
                'p' => [
                    'text' => 'The biggest risk after water damage is mold. Fast drying and antimicrobial treatment stop it before it starts. If mold has already begun, the affected area is contained and removed as part of the job. More on that is on the mold remediation page.',
                    'links' => [
                        [
                            'anchor' => 'mold remediation',
                            'href' => '/mold-remediation',
                            'pos' => 246,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Tips for Living With Drying Equipment',
            ],
            [
                'ul' => [
                    'Keep doors and plastic containment closed so dehumidifiers work efficiently.',
                    'Do not turn off or unplug equipment, even at night.',
                    'Keep windows closed unless the crew asks you to open them.',
                    'Expect some noise and warmth in the drying area.',
                    'Keep pets and children away from cords and equipment.',
                ],
            ],
            [
                'h2' => 'Water Mitigation FAQs',
            ],
            [
                'faq' => [
                    'q' => 'What is the difference between water mitigation and restoration?',
                    'a' => [
                        'Mitigation stops the damage from spreading: extraction, removal and drying. Restoration is the repair work after: new drywall, flooring, paint and trim.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Can I dry my house with fans and open windows?',
                    'a' => [
                        'Not reliably in San Bruno. Damp marine air keeps materials wet, and fans without dehumidifiers just move moisture around. Hidden moisture inside walls and under floors is the main mold risk.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Do walls always have to be opened up?',
                    'a' => [
                        'No. Often small holes for drying air are enough. Walls are cut only when insulation is soaked, water is contaminated, or readings do not drop.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'How much power does drying equipment use?',
                    'a' => [
                        'It adds to your electric bill for the few days it runs. Many homeowners policies include this in the claim, so keep track of it.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'How do I know drying is really finished?',
                    'a' => [
                        'The crew compares moisture readings in wet areas to normal areas of your home. Work moves on only when they match.',
                    ],
                ],
            ],
            [
                'h2' => 'Drying Classes: Why Some Jobs Take Longer',
            ],
            [
                'p' => 'The IICRC S500 standard sorts water losses into classes based on how much water is involved and how hard the materials are to dry. Knowing the class explains why one job dries in three days and another takes a week:',
            ],
            [
                'ul' => [
                    'Class 1: a small area with little water absorbed, such as a spill caught quickly on a hard floor',
                    'Class 2: a whole room, with water wicking up walls less than about two feet and carpet and pad soaked',
                    'Class 3: water from above, soaking ceilings, walls, insulation and floors',
                    'Class 4: materials that hold water tightly, like hardwood, plaster, concrete and crawl space soil, which need special methods and more time',
                ],
            ],
            [
                'p' => 'Many San Bruno jobs involve Class 4 materials because of original hardwood floors, plaster walls in older homes and crawl spaces under raised floors.',
            ],
            [
                'h2' => 'What a Daily Drying Visit Looks Like',
            ],
            [
                'p' => 'During drying, the crew stops by each day. A typical visit includes:',
            ],
            [
                'ul' => [
                    'Taking moisture readings at the same marked spots as the day before',
                    'Checking temperature and humidity inside the drying area and outside it',
                    'Emptying or checking dehumidifier drain lines',
                    'Moving air movers to target areas that are drying slowly',
                    'Removing equipment from areas that have reached normal levels',
                    'Updating the drying log with readings and photos',
                ],
            ],
            [
                'p' => 'You can ask to see the readings at any visit. When every spot matches normal, dry materials in the home, equipment comes out and repairs can begin.',
            ],
            [
                'h2' => 'Signs Your Home Was Not Dried Properly',
            ],
            [
                'p' => 'If water damage was cleaned up in the past without proper drying, these signs can show up weeks or months later:',
            ],
            [
                'ul' => [
                    'A musty smell that returns on humid days',
                    'Baseboards or door casings that are swollen or separating',
                    'Hardwood that keeps cupping or gapping',
                    'Paint or wallpaper peeling near the floor',
                    'Mold spots in closets or behind furniture near the old leak',
                ],
            ],
            [
                'p' => 'If you notice any of these, moisture readings can show whether water is still trapped inside walls or under floors.',
            ],
            [
                'h2' => 'Call for Water Mitigation in San Bruno Today',
            ],
            [
                'p' => 'The sooner drying starts, the less has to be removed. For water mitigation in San Bruno and structural drying anywhere in 94066, call (650) 822-6798 and a crew is dispatched immediately.',
            ],
        ],
        'eyebrow' => 'WATER MITIGATION • SAN BRUNO, CALIFORNIA',
    ],
    '/burst-pipe-water-damage' => [
        'type' => 'service',
        'kind' => 'service',
        'h1' => 'Emergency Burst Pipe Water Damage Cleanup in San Bruno',
        'meta' => [
            'title' => 'Burst Pipe Water Damage San Bruno | 24/7 Emergency Cleanup',
            'description' => 'Burst pipe water damage in San Bruno, CA 94066? A crew is dispatched immediately for extraction, drying and repairs. Call (650) 822-6798 now.',
        ],
        'blocks' => [
            [
                'p' => 'A pipe lets go and water pours into a hallway, through a ceiling or under the kitchen floor. In older San Bruno homes this is one of the most common emergencies. Our burst pipe water damage San Bruno crews stop the spread, extract the water, dry the structure and handle repairs. Call now and a crew is dispatched immediately.',
            ],
            [
                'h2' => 'Why do pipes burst in older San Bruno homes built in the 1950s?',
            ],
            [
                'p' => 'Many were built with galvanized steel supply pipes that rust from the inside. After 60 or more years, joints and threads thin out and split under normal water pressure.',
            ],
            [
                'p' => 'San Bruno grew fast after World War II, and much of the city\'s housing went up between the 1940s and 1960s. Back then, galvanized steel was the standard for water lines. It works for decades, but the zinc coating wears away, the steel corrodes, and the pipe narrows and weakens. A galvanized pipe leak often starts small at a threaded joint in a crawl space or behind a wall, then fails all at once.',
            ],
            [
                'h2' => 'Signs a Pipe Is About to Fail',
            ],
            [
                'p' => 'Catching a weak pipe early can save thousands in damage. Watch for:',
            ],
            [
                'ul' => [
                    'Low water pressure in several fixtures',
                    'Brown or rusty water when you first open a tap',
                    'Small damp spots or stains on walls and ceilings',
                    'A sound of running water when everything is shut off',
                    'A musty smell from a closet, cabinet or crawl space',
                    'A water bill that jumps with no change in use',
                ],
            ],
            [
                'p' => [
                    'text' => 'The old pipe warning signs guide covers this in more detail.',
                    'links' => [
                        [
                            'anchor' => 'old pipe warning signs',
                            'href' => '/resources/old-pipe-warning-signs-san-bruno',
                            'pos' => 60,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'What to Do the Moment a Pipe Bursts',
            ],
            [
                'h3' => '1. Shut Off the Main Water',
            ],
            [
                'p' => 'In most San Bruno homes the main valve is near the front of the house, in the garage, or at the meter box near the sidewalk. Turn it clockwise until it stops.',
            ],
            [
                'h3' => '2. Kill Power to Wet Areas',
            ],
            [
                'p' => 'If water is near outlets, light fixtures or the electrical panel, switch off the breakers for those rooms, but only if you can reach the panel without standing in water.',
            ],
            [
                'h3' => '3. Open Faucets',
            ],
            [
                'p' => 'Open a low faucet to drain remaining water out of the lines and reduce pressure.',
            ],
            [
                'h3' => '4. Move Belongings',
            ],
            [
                'p' => 'Get electronics, rugs, papers and furniture out of the wet area.',
            ],
            [
                'h3' => '5. Take Photos',
            ],
            [
                'p' => 'Photograph the burst pipe, the water and the affected rooms before cleanup starts.',
            ],
            [
                'h3' => '6. Call for Cleanup',
            ],
            [
                'p' => 'Call (650) 822-6798. A crew is dispatched immediately to start extraction and drying.',
            ],
            [
                'h2' => 'Broken Pipe Cleanup in San Bruno, CA: What the Crew Does',
            ],
            [
                'p' => 'Broken pipe cleanup in San Bruno, CA follows a clear process:',
            ],
            [
                'ul' => [
                    'Confirm the water is off and make the area safe',
                    'Extract standing water from floors, carpet and crawl spaces',
                    'Map moisture in walls, ceilings, cabinets and subfloors',
                    'Remove materials that cannot be dried, like soaked pad or swollen baseboards',
                    'Set up air movers and dehumidifiers with daily moisture readings',
                    'Treat affected areas to prevent mold',
                    'Repair drywall, flooring and finishes once everything is dry',
                ],
            ],
            [
                'h2' => 'Where Pipes Burst in San Bruno Homes',
            ],
            [
                'h3' => 'Under Raised Floors',
            ],
            [
                'p' => [
                    'text' => 'In raised ranch homes in Crestmoor and Rollingwood, supply lines run through the crawl space. A failure there can soak the soil and framing long before anyone notices. See crawl space water damage.',
                    'links' => [
                        [
                            'anchor' => 'crawl space water damage',
                            'href' => '/crawl-space-water-damage',
                            'pos' => 197,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Inside Walls',
            ],
            [
                'p' => 'Pipes inside exterior walls and between bathrooms can leak for days, soaking drywall and insulation from the inside.',
            ],
            [
                'h3' => 'Above Ceilings',
            ],
            [
                'p' => 'Two-story homes and condos in Shelter Creek and around Tanforan often have supply lines above ceilings. A burst there brings water down through light fixtures and drywall.',
            ],
            [
                'h3' => 'Under Slabs',
            ],
            [
                'p' => [
                    'text' => 'Homes on slabs in the flats can have pipe failures under the floor. These show up as warm spots, cracks or wet flooring. See slab leak water damage.',
                    'links' => [
                        [
                            'anchor' => 'slab leak water damage',
                            'href' => '/slab-leak-hidden-leak-water-damage',
                            'pos' => 148,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'At Fixtures and Appliances',
            ],
            [
                'p' => 'Supply hoses on toilets, sinks, washing machines and refrigerators fail often, especially rubber hoses that are more than a few years old.',
            ],
            [
                'h2' => 'Galvanized, Copper and PEX: What Fails Most',
            ],
            [
                'ul' => [
                    'Galvanized steel: common in homes built before the 1960s. Rusts from the inside and fails at threaded joints.',
                    'Copper: used from the 1960s on. Lasts longer but can develop pinhole leaks, especially near fittings.',
                    'Plastic supply hoses: under sinks and toilets. Cheap ones crack or burst with age.',
                    'PEX: newer and flexible. Failures usually happen at fittings or where it was damaged during installation.',
                ],
            ],
            [
                'p' => 'If your home has had more than one pipe failure, a plumber can tell you whether a full repipe makes sense. That decision is yours, but drying and repairs come first.',
            ],
            [
                'h2' => 'Insurance and Burst Pipes',
            ],
            [
                'p' => 'Most homeowners policies cover sudden and accidental pipe bursts. Damage from a slow leak that went on for a long time is often excluded. Every policy is different, so check yours. The crew documents every job with photos and moisture logs to support your claim.',
            ],
            [
                'h2' => 'Burst Pipes in Condos and Rentals',
            ],
            [
                'p' => [
                    'text' => 'In a condo, a burst pipe can damage your unit and the one below. In a rental, the landlord and tenant both need clear information. Moisture records help everyone see what was affected. More on condos is on the condo water damage page.',
                    'links' => [
                        [
                            'anchor' => 'condo water damage',
                            'href' => '/condo-water-damage',
                            'pos' => 234,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Burst Pipe FAQs',
            ],
            [
                'faq' => [
                    'q' => 'How fast do I need to act after a pipe bursts?',
                    'a' => [
                        'Right away. Shut off the water and call. Water spreads into walls and floors within minutes, and mold can start in 24 to 72 hours.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Can hardwood floors be saved after a burst pipe?',
                    'a' => [
                        [
                            'text' => 'Often, yes, if drying starts quickly. Floor drying mats pull water out of the boards before they cup. See hardwood floor water damage.',
                            'links' => [
                                [
                                    'anchor' => 'hardwood floor water damage',
                                    'href' => '/hardwood-floor-water-damage',
                                    'pos' => 134,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Do you repair the pipe itself?',
                    'a' => [
                        'The focus is on the water damage: extraction, drying and repairs. For the pipe repair, a local plumber handles the fix, and drying can start right away.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'How long does cleanup take?',
                    'a' => [
                        'Extraction usually takes a few hours. Drying takes three to five days in most homes. Repairs follow once everything is dry.',
                    ],
                ],
            ],
            [
                'h2' => 'The First 48 Hours After a Burst Pipe',
            ],
            [
                'p' => 'Knowing what happens in the first two days helps you understand why speed matters so much.',
            ],
            [
                'h3' => 'The First Hour',
            ],
            [
                'p' => 'Water spreads across floors and starts soaking into carpet pad, baseboards and the bottom of drywall. Shutting off the main valve and calling for help are the most important steps.',
            ],
            [
                'h3' => 'Hours 1 to 6',
            ],
            [
                'p' => 'Drywall wicks water upward. Wood floors begin to absorb water at the edges. Water may reach the ceiling below or the crawl space. Extraction during this window saves the most material.',
            ],
            [
                'h3' => 'Hours 6 to 24',
            ],
            [
                'p' => 'Carpet pad is usually saturated. Particleboard in cabinets may start to swell. Paint can bubble. Odors begin. Drying equipment should be running by now.',
            ],
            [
                'h3' => 'Days 1 to 2',
            ],
            [
                'p' => 'Without drying, hardwood begins to cup and mold can start on wet drywall and wood. With drying underway, readings should be dropping each day.',
            ],
            [
                'h2' => 'Questions to Ask Your Plumber After a Pipe Bursts',
            ],
            [
                'p' => 'Once the water is under control, a plumber repairs the pipe. These questions help you decide what comes next:',
            ],
            [
                'ul' => [
                    'What caused the pipe to fail: age, corrosion, a bad fitting or pressure?',
                    'Is the rest of the pipe in that area in similar condition?',
                    'How much original galvanized plumbing is left in the house?',
                    'Would a pressure regulator help protect the pipes?',
                    'Do you recommend a repair now and a repipe later, or a repipe now?',
                ],
            ],
            [
                'p' => 'The answers help you avoid another burst in a different spot a few months later.',
            ],
            [
                'h2' => 'Protecting Your Home From the Next Burst Pipe',
            ],
            [
                'p' => 'A few habits make a big difference in older San Bruno homes:',
            ],
            [
                'ul' => [
                    'Know where your main shutoff is, and make sure it turns easily',
                    'Replace rubber supply hoses on toilets, sinks and washers with braided steel',
                    'Have water pressure checked; pressure that is too high stresses old pipes',
                    'Look in the crawl space or garage once a season for rust, drips and damp spots',
                    'Install leak sensors near water heaters, washers and under sinks',
                    'Turn off the main water when you leave home for more than a few days',
                ],
            ],
            [
                'p' => 'These steps take little time and can prevent thousands of dollars in damage, and they matter most in homes where the original plumbing has never been replaced.',
            ],
            [
                'h2' => 'Call for Burst Pipe Water Damage Help in San Bruno',
            ],
            [
                'p' => 'A burst pipe does the most damage in the first few hours. For burst pipe water damage in San Bruno and fast broken pipe cleanup in San Bruno, CA, call (650) 822-6798 and a crew is dispatched immediately.',
            ],
        ],
        'eyebrow' => 'BURST PIPE WATER DAMAGE • SAN BRUNO, CALIFORNIA',
    ],
    '/sewage-backup-cleanup' => [
        'type' => 'service',
        'kind' => 'service',
        'h1' => '24/7 Sewage Backup Cleanup in San Bruno, CA',
        'meta' => [
            'title' => 'Sewage Backup Cleanup San Bruno | 24/7 Category 3 Response',
            'description' => '24/7 sewage backup cleanup in San Bruno, CA 94066. Safe removal, disinfection and drying after sewer backups. Call (650) 822-6798 now.',
        ],
        'blocks' => [
            [
                'p' => 'Sewage coming up through a toilet, shower or floor drain is more than a mess. It carries bacteria and viruses that make people sick. Our sewage backup cleanup San Bruno crews arrive in protective gear, remove contaminated water and materials, disinfect, and dry everything properly. Call now and a crew is dispatched immediately.',
            ],
            [
                'h2' => 'Who is responsible for a sewer lateral backup in San Bruno?',
            ],
            [
                'p' => 'The property owner. In San Bruno, the private sewer lateral running from your house to the city main is the owner\'s responsibility, including repairs and replacement.',
            ],
            [
                'p' => 'That surprises a lot of homeowners. The lateral is the pipe that carries everything from your toilets, sinks and showers out to the public sewer in the street. In older San Bruno homes it is often clay or cast iron, decades old, and full of cracks where tree roots get in. When it clogs, sewage has nowhere to go but back up into the lowest drain in the house.',
            ],
            [
                'h2' => 'What Causes a Sewer Backup in San Bruno, CA?',
            ],
            [
                'p' => 'The most common causes of a sewer backup in San Bruno, CA:',
            ],
            [
                'ul' => [
                    'Tree roots growing into old clay or cast iron laterals',
                    'Cracked, sagging or broken lateral pipes',
                    'Grease, wipes and paper products clogging the line',
                    'Heavy storms overloading the sewer system',
                    'High water in low areas near San Bruno Creek pushing water back through drains',
                    'A blockage in the city main, which is the city\'s responsibility',
                ],
            ],
            [
                'h2' => 'The Point-of-Sale Sewer Lateral Rule',
            ],
            [
                'p' => [
                    'text' => 'San Bruno requires a sewer lateral inspection when a home is sold. If the inspection finds problems, the lateral has to be repaired or replaced, and the cost falls on the owner. If you are buying or selling an older home, this is worth planning for. The sewer lateral guide explains the rule in plain terms.',
                    'links' => [
                        [
                            'anchor' => 'sewer lateral inspection',
                            'href' => '/resources/san-bruno-sewer-lateral-inspection',
                            'pos' => 307,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Why Sewage Is Category 3 Water',
            ],
            [
                'p' => 'The IICRC S500 standard classifies sewage as Category 3, the most contaminated type of water. It can carry E. coli, hepatitis, norovirus and other pathogens. Category 3 water cleanup follows strict rules:',
            ],
            [
                'ul' => [
                    'Porous materials it touched, like carpet, pad, drywall and insulation, are removed and bagged',
                    'Hard surfaces are cleaned and disinfected',
                    'Workers wear protective suits, gloves, boots and respirators',
                    'The area is contained so contamination does not spread to clean rooms',
                    'Drying happens only after contaminated materials are removed',
                ],
            ],
            [
                'h2' => 'Our Sewage Cleanup Process',
            ],
            [
                'h3' => 'Safety First',
            ],
            [
                'p' => 'The crew checks for electrical hazards, sets up containment and keeps people and pets away from the affected area.',
            ],
            [
                'h3' => 'Removal of Sewage and Debris',
            ],
            [
                'p' => 'Standing sewage is pumped out and solids are removed and disposed of properly.',
            ],
            [
                'h3' => 'Removal of Contaminated Materials',
            ],
            [
                'p' => 'Carpet, pad, baseboards, insulation and drywall below the contamination line are cut out and bagged.',
            ],
            [
                'h3' => 'Cleaning and Disinfection',
            ],
            [
                'p' => 'Floors, framing, concrete and hard surfaces are scrubbed and treated with disinfectant.',
            ],
            [
                'h3' => 'Drying',
            ],
            [
                'p' => 'Air movers and dehumidifiers dry the structure, with daily moisture readings.',
            ],
            [
                'h3' => 'Odor Control',
            ],
            [
                'p' => 'Air scrubbers with HEPA filters clean the air, and remaining odors are treated.',
            ],
            [
                'h3' => 'Repairs',
            ],
            [
                'p' => 'Once the area is clean and dry, drywall, flooring and trim are put back.',
            ],
            [
                'h2' => 'Where Sewage Backups Happen in San Bruno Homes',
            ],
            [
                'h3' => 'Ground-Floor Bathrooms and Laundry Rooms',
            ],
            [
                'p' => 'The lowest drain in the house is usually where sewage shows up first.',
            ],
            [
                'h3' => 'Crawl Spaces',
            ],
            [
                'p' => [
                    'text' => 'In raised homes, a broken drain line under the house can leak sewage directly onto the soil. It often goes unnoticed until the smell rises. See crawl space water damage.',
                    'links' => [
                        [
                            'anchor' => 'crawl space water damage',
                            'href' => '/crawl-space-water-damage',
                            'pos' => 169,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Garages and In-Law Units',
            ],
            [
                'p' => 'Converted garages and ground-level units often sit on the lowest drains in the home.',
            ],
            [
                'h3' => 'Low-Lying Neighborhoods',
            ],
            [
                'p' => [
                    'text' => 'In Belle Air and other areas near San Bruno Creek, heavy storms and high tides can push water back through floor drains. See storm and flood damage.',
                    'links' => [
                        [
                            'anchor' => 'storm and flood damage',
                            'href' => '/storm-flood-water-damage',
                            'pos' => 148,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Backwater Valves and Prevention',
            ],
            [
                'p' => 'A backwater valve on the lateral lets sewage flow out but stops it from flowing back into the house. In low areas and older homes it is one of the best ways to prevent repeat backups. Other steps that help:',
            ],
            [
                'ul' => [
                    'Do not flush wipes, even ones labeled flushable',
                    'Keep grease out of kitchen drains',
                    'Have the lateral inspected with a camera if you have had slow drains or a past backup',
                    'Know where your sewer cleanout is so a plumber can access it quickly',
                ],
            ],
            [
                'h2' => 'What to Do Right Now',
            ],
            [
                'ul' => [
                    'Stop using water in the house: no flushing, showers or laundry.',
                    'Keep everyone, especially children and pets, away from the area.',
                    'Do not touch sewage with bare hands.',
                    'Turn off power to the area if it is safe to reach the panel.',
                    'Open windows if it is safe, to reduce odors.',
                    'Call (650) 822-6798.',
                ],
            ],
            [
                'h2' => 'Sewage Backup FAQs',
            ],
            [
                'faq' => [
                    'q' => 'Is it safe to clean up sewage myself?',
                    'a' => [
                        'It is not recommended. Sewage carries harmful bacteria and viruses, and porous materials it touched must be removed, not just cleaned.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Does homeowners insurance cover sewer backups?',
                    'a' => [
                        'Many policies exclude sewer backup unless you have a specific endorsement for it. Check your policy. The crew documents everything for your claim either way.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Can carpet be saved after a sewage backup?',
                    'a' => [
                        'No. Carpet and pad that touched sewage have to be removed and disposed of.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'How long does sewage cleanup take?',
                    'a' => [
                        'Cleanup and disinfection usually take one to two days, followed by several days of drying before repairs.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Who fixes the sewer line?',
                    'a' => [
                        'A plumber repairs or replaces the lateral. The restoration crew handles the cleanup, disinfection, drying and repairs inside the home.',
                    ],
                ],
            ],
            [
                'h2' => 'Health Risks of Sewage Exposure',
            ],
            [
                'p' => 'Sewage contains bacteria, viruses and parasites that can cause stomach illness, skin infections and other problems. Children, older adults, pregnant women and anyone with a weak immune system are most at risk. That is why it is important to keep people and pets away from the affected area until cleanup is done, and to avoid touching contaminated water or materials without gloves and boots. If anyone feels sick after contact with sewage, talk to a doctor.',
            ],
            [
                'h2' => 'What Can Be Saved After a Sewage Backup',
            ],
            [
                'p' => 'Not everything has to be thrown out. Here is a general guide:',
            ],
            [
                'ul' => [
                    'Usually saved: hard, non-porous items such as metal, glass, sealed plastic, ceramic tile and solid hardwood furniture that can be cleaned and disinfected',
                    'Sometimes saved: clothing and fabrics that can be laundered in hot water, depending on how long they were exposed',
                    'Usually removed: carpet, pad, mattresses, upholstered furniture, cardboard, paper, drywall and insulation that touched sewage',
                    'Always removed: food, medicine and cosmetics that touched sewage',
                ],
            ],
            [
                'p' => 'The crew lists everything removed, with photos, for your insurance records.',
            ],
            [
                'h2' => 'Sewer Backups in Rentals, Condos and Businesses',
            ],
            [
                'p' => [
                    'text' => 'In multi-unit buildings, a blocked main line can send sewage into several ground-floor units at once. In restaurants and other businesses, floor drains in kitchens and restrooms are common backup points. Each space is cleaned, disinfected and documented separately so owners, tenants, HOAs and property managers all have clear records. See condo water damage and commercial water damage.',
                    'links' => [
                        [
                            'anchor' => 'condo water damage',
                            'href' => '/condo-water-damage',
                            'pos' => 359,
                        ],
                        [
                            'anchor' => 'commercial water damage',
                            'href' => '/commercial-water-damage',
                            'pos' => 451,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'How to Tell If the Problem Is Your Lateral or the City Main',
            ],
            [
                'p' => 'If only your home is backing up, the blockage is most likely in your private lateral. If several neighbors are having backups at the same time, the problem may be in the public main, which the city handles. In that case, call the City of San Bruno\'s public works department to report it, then call for cleanup inside your home.',
            ],
            [
                'h2' => 'Sewage Odor After Cleanup',
            ],
            [
                'p' => 'A lingering smell after a sewage backup usually means contaminated material is still somewhere it should not be: under flooring, inside a wall cavity, or in the crawl space. It can also mean a dry drain trap or a damaged seal is letting sewer gas into the house. Proper cleanup removes the source of the odor, not just covers it. HEPA air scrubbers and odor treatment help clear the air once contaminated materials are out. If an odor returns weeks later, call to have the area checked again.',
            ],
            [
                'h2' => 'Basements, Floor Drains and Low Bathrooms',
            ],
            [
                'p' => 'The lowest drain in the house is where sewage appears first. In San Bruno, that is often a garage floor drain, a ground-floor shower or a bathroom in a converted garage. If your home has one of these, a backwater valve and regular lateral maintenance are worth considering.',
            ],
            [
                'h2' => 'Call for Sewage Backup Cleanup in San Bruno Now',
            ],
            [
                'p' => 'Do not wait with sewage in your home. For sewage backup cleanup in San Bruno and help with any sewer backup in San Bruno, CA, call (650) 822-6798. A crew is dispatched immediately.',
            ],
        ],
        'eyebrow' => 'SEWAGE BACKUP CLEANUP • SAN BRUNO, CALIFORNIA',
    ],
    '/crawl-space-water-damage' => [
        'type' => 'service',
        'kind' => 'service',
        'h1' => 'Emergency Crawl Space Water Damage Cleanup in San Bruno',
        'meta' => [
            'title' => 'Crawl Space Water Damage San Bruno | Flooded Crawl Space Drying',
            'description' => 'Crawl space water damage in San Bruno, CA 94066. Water pumped out, soil and framing dried, mold stopped early. Call (650) 822-6798 24/7.',
        ],
        'blocks' => [
            [
                'p' => 'Water under the house is easy to miss and expensive to ignore. After heavy rain or a hidden pipe leak, crawl spaces in San Bruno\'s raised ranch homes can hold standing water for weeks. Our crawl space water damage San Bruno crews pump it out, dry the soil and framing, and stop mold before it reaches your floors. Call and a crew is dispatched immediately.',
            ],
            [
                'h2' => 'Why do crawl spaces flood in Crestmoor and Rollingwood homes after heavy rain?',
            ],
            [
                'p' => 'These mid-century homes sit on hillside lots over crawl spaces. Storm runoff flows downhill, soaks the soil around the foundation and seeps underneath, where it pools with nowhere to drain.',
            ],
            [
                'p' => 'Many homes in Crestmoor, Rollingwood, Portola Highlands and along Skyline Boulevard were built in the 1950s and 1960s with raised floors over a concrete perimeter foundation. The space underneath is usually bare soil. When winter storms soak the hillside, water follows gravity under the house. Add a broken downspout, a clogged foundation drain or a leaking pipe, and the crawl space becomes a shallow pond.',
            ],
            [
                'h2' => 'Signs of a Flooded Crawl Space in San Bruno, CA',
            ],
            [
                'p' => 'You rarely see a flooded crawl space in San Bruno, CA directly. Instead, watch for:',
            ],
            [
                'ul' => [
                    'A musty, earthy smell inside the house, especially after rain',
                    'Floors that feel soft, bouncy or cold',
                    'Hardwood floors starting to cup or gap',
                    'Higher humidity indoors, foggy windows or condensation',
                    'More spiders, silverfish or other pests than usual',
                    'Visible mold on the bottom of floor joists if you look through the access hatch',
                    'A sump pump running constantly, or not running at all',
                ],
            ],
            [
                'p' => 'If you notice any of these, a quick look through the crawl space hatch with a flashlight will often show standing water or wet soil.',
            ],
            [
                'h2' => 'Why Crawl Space Water Is a Big Problem',
            ],
            [
                'h3' => 'Mold on Framing',
            ],
            [
                'p' => 'Wet soil keeps the air under the house humid. Floor joists, subfloor and sill plates absorb that moisture and grow mold, which can spread into the living space through gaps in the floor.',
            ],
            [
                'h3' => 'Wood Rot',
            ],
            [
                'p' => 'Framing that stays damp for months starts to rot. This weakens the floor and can lead to costly structural repairs.',
            ],
            [
                'h3' => 'Indoor Air Quality',
            ],
            [
                'p' => 'Air from the crawl space rises into the home. Mold spores and musty odors come with it.',
            ],
            [
                'h3' => 'Damaged Floors',
            ],
            [
                'p' => 'Hardwood floors above a wet crawl space cup and buckle. Carpet and pad hold onto the musty smell.',
            ],
            [
                'h3' => 'Pests',
            ],
            [
                'p' => 'Damp crawl spaces attract termites, rodents and insects.',
            ],
            [
                'h2' => 'How Crawl Space Water Damage Is Cleaned Up',
            ],
            [
                'h3' => 'Inspection',
            ],
            [
                'p' => 'The crew enters the crawl space with lights and meters to find the source and measure moisture in the soil, framing and subfloor.',
            ],
            [
                'h3' => 'Water Removal',
            ],
            [
                'p' => 'Standing water is pumped out with submersible pumps. Mud and debris are removed.',
            ],
            [
                'h3' => 'Removal of Damaged Materials',
            ],
            [
                'p' => 'Wet insulation between the joists, torn vapor barrier and anything contaminated are removed.',
            ],
            [
                'h3' => 'Crawl Space Drying',
            ],
            [
                'p' => 'Crawl space drying uses dehumidifiers and air movers set up under the house, often with the area sealed so the equipment works efficiently. Readings are taken daily until framing is back to normal levels.',
            ],
            [
                'h3' => 'Antimicrobial Treatment',
            ],
            [
                'p' => 'Joists, subfloor and other wood surfaces are treated to stop mold growth.',
            ],
            [
                'h3' => 'Recommendations',
            ],
            [
                'p' => 'Once dry, you get practical advice on keeping water out next time.',
            ],
            [
                'h2' => 'Sewage Under the House',
            ],
            [
                'p' => [
                    'text' => 'If a drain line broke under the house, the crawl space may be contaminated with sewage. That is Category 3 water and needs protective gear, removal of contaminated soil and materials, and disinfection. See sewage backup cleanup.',
                    'links' => [
                        [
                            'anchor' => 'sewage backup cleanup',
                            'href' => '/sewage-backup-cleanup',
                            'pos' => 228,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Keeping Water Out of Your Crawl Space',
            ],
            [
                'p' => 'After the dry-out, these steps help stop the problem from coming back:',
            ],
            [
                'ul' => [
                    'Extend downspouts so roof water lands several feet from the foundation',
                    'Clean gutters before the rainy season',
                    'Grade soil around the house so it slopes away',
                    'Install or repair a perimeter drain on uphill sides',
                    'Add a sump pump with a battery backup in crawl spaces that flood often',
                    'Put down a heavy vapor barrier over the soil',
                    'Consider encapsulation for crawl spaces with ongoing moisture problems',
                ],
            ],
            [
                'h2' => 'Crawl Spaces and the Fog Belt',
            ],
            [
                'p' => [
                    'text' => 'Even without flooding, crawl spaces in the foggy northern and western parts of San Bruno stay damp. Vents bring in cool, wet marine air, and the soil rarely dries out. That is why a crawl space that took on water during a storm needs mechanical drying, not just time. More on fog and moisture is in the fog and mold guide.',
                    'links' => [
                        [
                            'anchor' => 'fog and mold guide',
                            'href' => '/resources/peninsula-fog-mold-prevention',
                            'pos' => 322,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Crawl Space FAQs',
            ],
            [
                'faq' => [
                    'q' => 'How do I know if my crawl space has water?',
                    'a' => [
                        'Check for musty smells, soft floors and high indoor humidity. Look through the access hatch with a flashlight after heavy rain.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Can water in the crawl space cause mold upstairs?',
                    'a' => [
                        'Yes. Moist air from under the house rises into the home and can lead to mold on floors, walls and furniture.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'How long does crawl space drying take?',
                    'a' => [
                        'Usually three to seven days, depending on how much water there was and how wet the soil and framing are.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'What is crawl space encapsulation?',
                    'a' => [
                        'It means sealing the crawl space with a heavy liner on the floor and walls and controlling humidity with a dehumidifier. It is a long-term fix for crawl spaces that stay damp.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Is crawl space water covered by insurance?',
                    'a' => [
                        'Water from a sudden pipe burst often is. Water from surface runoff or long-term seepage often is not. Check your policy.',
                    ],
                ],
            ],
            [
                'h2' => 'Crawl Space Vapor Barriers Explained',
            ],
            [
                'p' => 'A vapor barrier is a sheet of heavy plastic laid over the soil in a crawl space. It slows moisture rising from the ground into the air under your house. In many older San Bruno homes the original barrier is thin, torn, missing, or was never installed. After a flood, a damaged barrier usually has to be removed so the soil can dry, then replaced with a heavier one. Seams should be overlapped and taped, and the edges run up the foundation walls a few inches.',
            ],
            [
                'h2' => 'Sump Pumps for San Bruno Crawl Spaces',
            ],
            [
                'p' => 'If your crawl space takes on water in most heavy storms, a sump pump can remove it before it pools. A good setup includes:',
            ],
            [
                'ul' => [
                    'A sump pit at the lowest point of the crawl space',
                    'A pump sized for the amount of water you get',
                    'A discharge line that carries water well away from the foundation',
                    'A battery backup so it keeps working if the power goes out in a storm',
                    'An alarm or phone alert if the water level rises too high',
                ],
            ],
            [
                'p' => 'Test the pump before the rainy season by pouring water into the pit and making sure it turns on.',
            ],
            [
                'h2' => 'Crawl Space Water and Selling Your Home',
            ],
            [
                'p' => 'Home inspectors check crawl spaces, and standing water, mold on joists or wood rot will show up in the report. If you plan to sell, dealing with crawl space water ahead of time is usually easier than negotiating repairs during escrow. Keep the drying records and photos from any crawl space cleanup so you can show buyers the problem was handled properly.',
            ],
            [
                'h2' => 'Hillside Drainage and Crawl Spaces',
            ],
            [
                'p' => 'On sloped lots in Crestmoor, Rollingwood and Portola Highlands, water often enters from the uphill side of the foundation. A perimeter drain, sometimes called a French drain, along that side can catch water underground and carry it around the house before it reaches the crawl space. It is one of the most effective long-term fixes for hillside homes.',
            ],
            [
                'h2' => 'Should You Go Into a Wet Crawl Space Yourself?',
            ],
            [
                'p' => 'It is fine to look through the access hatch with a flashlight. Going all the way in is a different matter. Wet crawl spaces can hide sewage, sharp debris, live wiring, mold and pests, and the tight space makes it hard to move. If you see standing water, smell sewage, or notice wiring near the water, stay out and call for help. The crew enters with protective gear, lights and meters, and can tell you exactly what is going on under your home with photos.',
            ],
            [
                'h2' => 'How Often to Check Your Crawl Space',
            ],
            [
                'p' => 'Check through the hatch at least once before the rainy season, again after the first big storm, and after any long run of storms. A quick look takes a few minutes and can catch water before it becomes a mold problem.',
            ],
            [
                'h2' => 'Call About Crawl Space Water Damage in San Bruno',
            ],
            [
                'p' => 'If you suspect a flooded crawl space in San Bruno, CA, do not wait for the smell to get worse. For crawl space water damage in San Bruno, call (650) 822-6798 and a crew is dispatched immediately.',
            ],
        ],
        'eyebrow' => 'CRAWL SPACE WATER DAMAGE • SAN BRUNO, CALIFORNIA',
    ],
    '/storm-flood-water-damage' => [
        'type' => 'service',
        'kind' => 'service',
        'h1' => '24/7 Flood and Storm Damage Restoration in San Bruno, CA',
        'meta' => [
            'title' => 'Flood Damage Restoration San Bruno | 24/7 Storm Water Cleanup',
            'description' => 'Flood damage restoration in San Bruno, CA 94066. Storm water pumped out, homes dried and sanitized, day or night. Call (650) 822-6798.',
        ],
        'blocks' => [
            [
                'p' => 'When a winter storm pushes water under your door, into your garage or up through a floor drain, every hour counts. Our flood damage restoration San Bruno crews pump out the water, remove what cannot be saved, sanitize and dry your home or business. Call any time during a storm and a crew is dispatched immediately.',
            ],
            [
                'h2' => 'Which parts of San Bruno flood during winter storms?',
            ],
            [
                'p' => 'Low areas that drain to San Bruno Creek, especially Belle Air near SFO, see the most flooding. Downhill homes in hillside neighborhoods get runoff in garages and crawl spaces.',
            ],
            [
                'p' => 'San Bruno\'s flooding comes from two directions. Near the Bay, stormwater from much of the city flows to San Bruno Creek, which empties into the Bay close to SFO. When heavy rain lines up with a high tide, the creek cannot drain, and water backs up into streets and homes around 7th Avenue and SR-380. Up in the hills, Crestmoor, Rollingwood, Portola Highlands and Pacific Heights send runoff downhill fast, flooding garages, in-law units and crawl spaces on the low side of the street.',
            ],
            [
                'h2' => 'Common Types of Storm Water Damage in San Bruno, CA',
            ],
            [
                'p' => 'Storm water damage in San Bruno, CA usually shows up in one of these ways:',
            ],
            [
                'ul' => [
                    'Water coming under exterior doors and garage doors',
                    'Runoff seeping through foundation walls into crawl spaces',
                    'Floor drains and toilets backing up when the sewer system is overloaded',
                    'Roof and window leaks from wind-driven rain',
                    'Flooded garages, converted garages and in-law units at ground level',
                    'Street water entering low homes and businesses during king tides and heavy rain',
                ],
            ],
            [
                'h2' => 'Why Floodwater Is Treated Differently',
            ],
            [
                'p' => 'Water that comes from outside is classified as Category 3, or black water. It can carry sewage, chemicals, oil from roads, animal waste and bacteria. That means flood cleanup is not just extraction and drying:',
            ],
            [
                'ul' => [
                    'Carpet, pad and upholstered items that touched floodwater are removed',
                    'Drywall and insulation are cut out above the water line',
                    'All surfaces are cleaned and disinfected',
                    'Workers wear full protective gear',
                    'Drying only starts once contaminated materials are out',
                ],
            ],
            [
                'h2' => 'Our Flood Damage Restoration Process',
            ],
            [
                'h3' => '1. Rapid Response',
            ],
            [
                'p' => 'You call (650) 822-6798 and a crew is dispatched immediately with pumps, generators if needed, and protective equipment.',
            ],
            [
                'h3' => '2. Safety Check',
            ],
            [
                'p' => 'Power is shut off to flooded areas, and the crew checks for structural and electrical hazards.',
            ],
            [
                'h3' => '3. Water Removal',
            ],
            [
                'p' => 'Submersible pumps and truck-mounted units remove standing water from rooms, garages and crawl spaces.',
            ],
            [
                'h3' => '4. Mud and Debris Removal',
            ],
            [
                'p' => 'Silt, mud and debris left behind by floodwater are shoveled out and hauled away.',
            ],
            [
                'h3' => '5. Flood Cuts and Material Removal',
            ],
            [
                'p' => 'Drywall is cut a foot or more above the water line, and wet insulation, carpet and pad are removed.',
            ],
            [
                'h3' => '6. Cleaning and Disinfection',
            ],
            [
                'p' => 'Framing, concrete and hard surfaces are cleaned and treated with disinfectant and antimicrobial products.',
            ],
            [
                'h3' => '7. Structural Drying',
            ],
            [
                'p' => [
                    'text' => 'Air movers and dehumidifiers run until moisture readings reach normal levels. See structural drying.',
                    'links' => [
                        [
                            'anchor' => 'structural drying',
                            'href' => '/structural-drying',
                            'pos' => 100,
                        ],
                    ],
                ],
            ],
            [
                'h3' => '8. Rebuild',
            ],
            [
                'p' => 'Drywall, insulation, flooring and finishes are replaced once everything is dry.',
            ],
            [
                'h2' => 'Atmospheric River Flooding and the Peninsula',
            ],
            [
                'p' => 'Most of San Bruno\'s flooding happens between November and March, during atmospheric river flooding events that bring days of heavy rain off the Pacific. Storms like these saturate the hillsides, overwhelm storm drains, and raise creek levels at the same time. When several storms arrive back to back, the ground cannot absorb any more water, and homes that stayed dry in earlier storms suddenly take on water.',
            ],
            [
                'h2' => 'Neighborhood Flood Risks in San Bruno',
            ],
            [
                'h3' => 'Belle Air and Lomita Park',
            ],
            [
                'p' => 'Low, flat streets near SFO and San Bruno Creek. Street flooding, garage flooding and drain backups during high tides and heavy rain.',
            ],
            [
                'h3' => 'Downtown and San Bruno Park',
            ],
            [
                'p' => 'Older homes near San Mateo Avenue with aging storm drains and sewer laterals. Drain backups are common in big storms.',
            ],
            [
                'h3' => 'Crestmoor, Rollingwood and Portola Highlands',
            ],
            [
                'p' => [
                    'text' => 'Hillside streets that send runoff downhill. Garages, in-law units and crawl spaces on the low side take the water. See flooded garage cleanup.',
                    'links' => [
                        [
                            'anchor' => 'flooded garage cleanup',
                            'href' => '/garage-in-law-unit-flooding',
                            'pos' => 142,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Commercial Areas',
            ],
            [
                'p' => [
                    'text' => 'Businesses along El Camino Real, near Tanforan and around Bayhill can see roof leaks and water entering through storefronts and loading areas. See commercial water damage.',
                    'links' => [
                        [
                            'anchor' => 'commercial water damage',
                            'href' => '/commercial-water-damage',
                            'pos' => 171,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Getting Ready Before the Storm',
            ],
            [
                'ul' => [
                    'Clear gutters, downspouts and the storm drain in front of your home.',
                    'Pick up sandbags early. The city has offered them behind Fire Station 51 at 555 El Camino Real.',
                    'Move valuables off garage floors and onto shelves.',
                    'Test your sump pump and keep a battery backup ready.',
                    'Check that crawl space vents and foundation drains are clear.',
                    'Know where your main water shutoff and electrical panel are.',
                    'Sign up for local emergency alerts from San Mateo County.',
                ],
            ],
            [
                'p' => [
                    'text' => 'The Belle Air storm checklist goes into more detail.',
                    'links' => [
                        [
                            'anchor' => 'Belle Air storm checklist',
                            'href' => '/resources/belle-air-storm-flood-checklist',
                            'pos' => 52,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Flood Insurance and Storm Claims',
            ],
            [
                'p' => 'Standard homeowners policies usually do not cover flooding from outside water such as rising creeks or street water. That generally needs a separate flood policy. Wind-driven rain through a damaged roof, or a sewer backup with the right endorsement, may be covered under a homeowners policy. Every policy is different. The crew documents all damage with photos and moisture readings so you have what you need for any claim.',
            ],
            [
                'h2' => 'Flood Damage FAQs',
            ],
            [
                'faq' => [
                    'q' => 'How soon should flood cleanup start?',
                    'a' => [
                        'As soon as the water stops rising and it is safe to enter. Mold can start within 24 to 72 hours, and contaminated water spreads bacteria the longer it sits.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Can furniture be saved after a flood?',
                    'a' => [
                        'Hard furniture like solid wood or metal can often be cleaned and disinfected. Upholstered furniture and mattresses that touched floodwater usually cannot be saved.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Do I need a separate flood policy?',
                    'a' => [
                        'Outside floodwater is usually excluded from standard homeowners policies. If you live in a low area near San Bruno Creek, ask your agent about flood coverage.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Is it safe to stay in the house during cleanup?',
                    'a' => [
                        'If only a garage or one area flooded and the power is safe, many families stay home. If living areas took floodwater, it is usually better to stay elsewhere until the area is clean and dry.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'What if my sewer backed up during the storm?',
                    'a' => [
                        [
                            'text' => 'That is sewage and needs Category 3 cleanup. See sewage backup cleanup.',
                            'links' => [
                                [
                                    'anchor' => 'sewage backup cleanup',
                                    'href' => '/sewage-backup-cleanup',
                                    'pos' => 71,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Storm Damage vs Flood Damage: Why the Difference Matters',
            ],
            [
                'p' => 'The words sound alike, but insurance companies and restoration crews treat them differently. Storm damage usually means water that got in because something broke: wind lifted shingles, a tree limb cracked the roof, or rain was driven through a damaged window. Flood damage usually means water that rose from outside, such as a creek overflowing, street water entering the garage, or groundwater coming up through the floor. Storm damage is often covered by a homeowners policy, while flood damage usually needs a separate flood policy. The cleanup also differs: rainwater through a roof may be Category 1 or 2, while rising floodwater is treated as Category 3.',
            ],
            [
                'h2' => 'What the First 24 Hours After a Flood Look Like',
            ],
            [
                'ul' => [
                    'Hours 0 to 2: water stops rising; stay out until it is safe and power is off in wet areas',
                    'Hours 2 to 6: the crew arrives, pumps out standing water and removes mud',
                    'Hours 6 to 12: contaminated carpet, pad and soaked drywall come out; surfaces are cleaned and disinfected',
                    'Hours 12 to 24: dehumidifiers and air movers are set up and first moisture readings are logged',
                ],
            ],
            [
                'p' => 'Getting through these steps in the first day is what keeps a flood from turning into a mold problem.',
            ],
            [
                'h2' => 'Protecting Important Papers and Valuables',
            ],
            [
                'p' => 'In low areas that flood, keep documents, photos and valuables safe before storm season:',
            ],
            [
                'ul' => [
                    'Store birth certificates, passports, deeds and insurance policies in a waterproof container on an upper shelf',
                    'Scan important papers and photos and keep digital copies',
                    'Keep a home inventory with photos or video of rooms and belongings',
                    'Move heirlooms and electronics out of garages and ground floors',
                ],
            ],
            [
                'p' => 'After a flood, those records make insurance claims much easier and protect what cannot be replaced.',
            ],
            [
                'h2' => 'After the Storm: Checking for Hidden Damage',
            ],
            [
                'p' => 'Even if water did not come inside, a big storm can leave hidden problems. Walk around the house and look for missing shingles, clogged gutters, soil washed away from the foundation and water marks on garage walls. Check the attic for damp insulation and the crawl space for standing water. Catching these early prevents slow leaks and mold from building up before the next storm arrives.',
            ],
            [
                'h2' => 'Call for Flood Damage Restoration in San Bruno Now',
            ],
            [
                'p' => 'Storm water does the most damage in the first day. For flood damage restoration in San Bruno and fast help with storm water damage in San Bruno, CA, call (650) 822-6798. A crew is dispatched immediately, day or night.',
            ],
        ],
        'eyebrow' => 'FLOOD DAMAGE RESTORATION • SAN BRUNO, CALIFORNIA',
    ],
    '/garage-in-law-unit-flooding' => [
        'type' => 'service',
        'kind' => 'service',
        'h1' => 'Emergency Flooded Garage and In-Law Unit Cleanup in San Bruno',
        'meta' => [
            'title' => 'Flooded Garage Cleanup San Bruno | In-Law Unit Water Damage 24/7',
            'description' => 'Flooded garage cleanup and in-law unit water damage repair in San Bruno, CA 94066. Pump-out, drying and repairs. Call (650) 822-6798 24/7.',
        ],
        'blocks' => [
            [
                'p' => 'On San Bruno\'s hillside streets, the garage or in-law unit at the bottom of the lot is the first place storm water goes. Our flooded garage cleanup San Bruno crews pump out the water, save what can be saved, dry walls and floors, and get converted spaces livable again. Call any time and a crew is dispatched immediately.',
            ],
            [
                'h2' => 'Why do downhill homes in San Bruno get water in the garage during storms?',
            ],
            [
                'p' => 'Garages and in-law units on downhill lots sit at the lowest point. Street runoff, driveway water and saturated hillside soil all flow toward them, entering under doors and through slab joints.',
            ],
            [
                'p' => 'Much of San Bruno is built on slopes. In Crestmoor, Rollingwood, Portola Highlands and Pacific Heights, many homes have a garage under the house or at street level, with the living space above or behind. When a storm drops heavy rain on the hills, water runs down streets and driveways and finds the lowest opening. That is usually the garage door, a side door, or the seam where the slab meets the foundation wall.',
            ],
            [
                'h2' => 'In-Law Unit Water Damage in San Bruno, CA',
            ],
            [
                'p' => 'Converted garages and in-law units have become common across the Peninsula, but most were built inside spaces never designed to stay dry. In-law unit water damage in San Bruno, CA is especially hard because:',
            ],
            [
                'ul' => [
                    'The floor is often a concrete slab right at ground level',
                    'Walls may have been framed directly against the original garage walls',
                    'There may be no gutters, drains or grading to steer water away',
                    'Carpet and laminate over concrete trap moisture underneath',
                    'Someone may be living there, so the work has to move quickly',
                ],
            ],
            [
                'p' => 'When water gets into a rented unit, the tenant needs a dry, safe place, and the owner needs clear records of what happened. The crew keeps photos and moisture logs for both.',
            ],
            [
                'h2' => 'How Hillside Runoff Gets Into the House',
            ],
            [
                'p' => 'Hillside runoff into the house usually comes through a few predictable paths:',
            ],
            [
                'ul' => [
                    'Under the garage door when the driveway slopes toward the house',
                    'Through cracks and cold joints in the slab and foundation',
                    'Through weep holes and vents near ground level',
                    'From overflowing gutters dumping water right at the foundation',
                    'Through window wells and below-grade windows',
                    'Up through floor drains when the storm system backs up',
                ],
            ],
            [
                'h2' => 'What Gets Damaged in a Flooded Garage',
            ],
            [
                'h3' => 'Stored Belongings',
            ],
            [
                'p' => 'Boxes, papers, photos, clothing, tools and holiday decorations on the floor soak up water fast. Plastic bins and items on shelves usually survive.',
            ],
            [
                'h3' => 'Drywall and Insulation',
            ],
            [
                'p' => 'Finished garages with drywall wick water upward. Insulation behind it holds moisture against the framing.',
            ],
            [
                'h3' => 'Water Heaters and Furnaces',
            ],
            [
                'p' => 'Many San Bruno homes have the water heater and furnace in the garage. Water touching gas appliances, burners or electrical parts needs to be checked before use.',
            ],
            [
                'h3' => 'Laundry Equipment',
            ],
            [
                'p' => 'Washers and dryers in the garage can be damaged if water reaches the motor or controls.',
            ],
            [
                'h3' => 'Flooring in Converted Spaces',
            ],
            [
                'p' => 'Carpet, laminate and vinyl plank over concrete hold water underneath and often need to be lifted.',
            ],
            [
                'h2' => 'How a Flooded Garage Is Cleaned Up',
            ],
            [
                'h3' => 'Pump-Out',
            ],
            [
                'p' => 'Standing water is removed with submersible pumps and wet vacuums.',
            ],
            [
                'h3' => 'Sorting Belongings',
            ],
            [
                'p' => 'Items are moved out, sorted into what can be cleaned and what has to go, and photographed for your records.',
            ],
            [
                'h3' => 'Removing Wet Materials',
            ],
            [
                'p' => 'Wet drywall, insulation, carpet and pad are removed. In in-law units, flooring is lifted to dry the slab underneath.',
            ],
            [
                'h3' => 'Cleaning and Disinfecting',
            ],
            [
                'p' => 'Storm water is usually contaminated, so floors and walls are cleaned and disinfected.',
            ],
            [
                'h3' => 'Drying',
            ],
            [
                'p' => [
                    'text' => 'Dehumidifiers and air movers dry the slab, framing and walls. See structural drying.',
                    'links' => [
                        [
                            'anchor' => 'structural drying',
                            'href' => '/structural-drying',
                            'pos' => 84,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Repairs',
            ],
            [
                'p' => 'Drywall, baseboards and flooring are replaced so the space is usable again.',
            ],
            [
                'h2' => 'Keeping Water Out Next Time',
            ],
            [
                'ul' => [
                    'Install a trench drain across the bottom of a sloped driveway',
                    'Add or repair weatherstripping at the bottom of the garage door',
                    'Extend downspouts away from the garage',
                    'Seal cracks in the slab and at the foundation joint',
                    'Store belongings on shelves or in sealed plastic bins, not on the floor',
                    'Raise water heaters and appliances on platforms',
                    'Keep sandbags on hand for storm warnings',
                ],
            ],
            [
                'h2' => 'Garage Flooding and Mold',
            ],
            [
                'p' => [
                    'text' => 'A garage that floods and dries slowly in San Bruno\'s damp climate is a prime spot for mold. Mold grows on drywall paper, cardboard boxes and wood framing within a few days. If you smell mustiness after a garage flood, the area may need mold remediation.',
                    'links' => [
                        [
                            'anchor' => 'mold remediation',
                            'href' => '/mold-remediation',
                            'pos' => 253,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Flooded Garage FAQs',
            ],
            [
                'faq' => [
                    'q' => 'Is a flooded garage covered by insurance?',
                    'a' => [
                        'Water from outside runoff is often excluded from homeowners policies, while a burst pipe or failed water heater in the garage is often covered. Check your policy.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Can a converted garage be dried without tearing everything out?',
                    'a' => [
                        'Sometimes. If water was shallow and caught quickly, flooring can be lifted, the slab dried and walls dried with injection. Contaminated water usually means more removal.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Should my tenant leave during cleanup?',
                    'a' => [
                        'If the unit\'s floor and walls are wet, it is usually best for the tenant to stay elsewhere until drying is done, typically a few days.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Is it safe to use my water heater after the garage flooded?',
                    'a' => [
                        'Not until it is checked. If water reached the burner, controls or electrical parts, have it inspected before using it.',
                    ],
                ],
            ],
            [
                'h2' => 'Gas Appliances and Electrical Panels in a Flooded Garage',
            ],
            [
                'p' => 'Garages in San Bruno often hold the water heater, the furnace, the washer and dryer, and sometimes the main electrical panel. Water and these systems are a dangerous mix. If water has reached any of them:',
            ],
            [
                'ul' => [
                    'Do not turn on or relight a gas water heater or furnace until it has been checked',
                    'Do not touch the electrical panel if you are standing in water',
                    'Have a qualified technician inspect gas controls, burners and wiring that got wet',
                    'Replace electrical outlets and switches that were submerged',
                ],
            ],
            [
                'p' => 'The restoration crew can shut off power to wet areas and work around these systems safely, but the appliances themselves should be checked by the right trade before use.',
            ],
            [
                'h2' => 'Sorting Belongings After a Garage Flood',
            ],
            [
                'p' => 'Garages are where families store the things they do not use every day: photos, holiday decorations, tools, paperwork, sports gear. Sorting them quickly saves more.',
            ],
            [
                'h3' => 'Usually Saved',
            ],
            [
                'p' => 'Metal tools, plastic bins with lids, glass, ceramic and sealed containers can be cleaned and disinfected.',
            ],
            [
                'h3' => 'Often Saved With Care',
            ],
            [
                'p' => 'Photos and important papers can sometimes be saved if they are frozen or air-dried quickly. Wooden furniture can often be cleaned and dried.',
            ],
            [
                'h3' => 'Usually Discarded',
            ],
            [
                'p' => 'Cardboard boxes, mattresses, upholstered items, carpet remnants and anything soft that soaked in storm water.',
            ],
            [
                'h2' => 'Renting Out an In-Law Unit After Water Damage',
            ],
            [
                'p' => 'If you rent out a converted garage or in-law unit, water damage affects your tenant right away. Make sure the unit is fully dried, cleaned and clear of mold before anyone moves back in. Keep the drying logs and photos with your rental records. They show the space was restored properly, which protects both you and your tenant.',
            ],
            [
                'h2' => 'Garage Floor Coatings and Water',
            ],
            [
                'p' => 'Epoxy and other floor coatings make garage floors easier to clean and help water sit on top of the slab rather than soaking in. They do not stop water from entering under the door, but they make cleanup faster and reduce staining and odors. If your garage floods often, a coating combined with a trench drain at the driveway and better door seals can make each storm much less of a problem.',
            ],
            [
                'h2' => 'Converted Garages and Moisture From Below',
            ],
            [
                'p' => 'Even without a flood, converted garages can feel damp because the slab sits right on the ground with no barrier underneath. Flooring laid directly on the slab can trap that moisture and grow mold. A moisture test on the slab before new flooring goes down, and a proper vapor barrier or underlayment, help keep a converted space dry for the long term.',
            ],
            [
                'h2' => 'Garage Flooding FAQ for Landlords',
            ],
            [
                'faq' => [
                    'q' => 'Who pays when a rented in-law unit floods?',
                    'a' => [
                        'It depends on the cause, the lease and your insurance. Building repairs are usually the owner\'s responsibility, while tenants often need renters insurance for their belongings.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'How soon can a tenant move back in?',
                    'a' => [
                        'Usually once drying is complete, materials are back to normal moisture levels, and any contaminated materials have been removed and replaced, which often takes several days to a week.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'What records should I keep?',
                    'a' => [
                        'Photos, moisture logs, a list of removed materials and the repair scope. These help with insurance and show the unit was restored properly.',
                    ],
                ],
            ],
            [
                'h2' => 'Call for Flooded Garage Cleanup in San Bruno',
            ],
            [
                'p' => 'For fast flooded garage cleanup in San Bruno and help with in-law unit water damage in San Bruno, CA, call (650) 822-6798. A crew is dispatched immediately, day or night.',
            ],
        ],
        'eyebrow' => 'FLOODED GARAGE CLEANUP • SAN BRUNO, CALIFORNIA',
    ],
    '/roof-leak-ceiling-water-damage' => [
        'type' => 'service',
        'kind' => 'service',
        'h1' => 'Emergency Ceiling and Roof Leak Water Damage in San Bruno',
        'meta' => [
            'title' => 'Ceiling Water Damage San Bruno | 24/7 Roof Leak Cleanup',
            'description' => 'Ceiling water damage in San Bruno, CA 94066 from roof leaks, pipes or units above. Fast drying and repairs. Call (650) 822-6798 24/7.',
        ],
        'blocks' => [
            [
                'p' => 'A brown stain spreading across the ceiling, drywall sagging, water dripping through a light fixture. Our ceiling water damage San Bruno crews find where the water went, dry the attic and ceiling, prevent mold and repair the damage. Call now and a crew is dispatched immediately.',
            ],
            [
                'h2' => 'What causes ceilings to leak in San Bruno during wind-driven rain?',
            ],
            [
                'p' => 'Strong storm winds off the Pacific push rain sideways under shingles, around flashing, vents and chimneys, and through gaps that stay dry in normal rain.',
            ],
            [
                'p' => 'San Bruno sits just east of the coastal hills, and winter storms often arrive with strong southwest winds. Rain that would normally run off a roof gets driven up under shingles and into joints. Older composition roofs, worn flashing around chimneys and skylights, and clogged gutters are the usual weak spots. Water then soaks into attic insulation and spreads across the top of the ceiling drywall before it ever shows below.',
            ],
            [
                'h2' => 'Other Sources of Ceiling Water Damage',
            ],
            [
                'p' => 'Not every wet ceiling is a roof leak. Common sources in San Bruno homes and condos include:',
            ],
            [
                'ul' => [
                    'A bathroom or kitchen above: leaking shower pans, toilet seals or supply lines',
                    'A unit above in a condo or apartment building',
                    'Supply pipes running through the ceiling',
                    'HVAC condensation lines and drip pans in the attic',
                    'Water heaters in attics or upper closets',
                    'Ice maker and refrigerator lines on an upper floor',
                ],
            ],
            [
                'p' => 'Finding the true source matters, because drying a ceiling that keeps getting wet just wastes time.',
            ],
            [
                'h2' => 'Warning Signs of Roof Leak Water Damage in San Bruno, CA',
            ],
            [
                'p' => 'Watch for these signs of roof leak water damage in San Bruno, CA:',
            ],
            [
                'ul' => [
                    'A water stain on ceiling drywall, often with a brown ring',
                    'Paint bubbling or peeling on the ceiling or upper walls',
                    'Drywall that sags or feels soft',
                    'Dripping from light fixtures, vents or smoke detectors',
                    'A musty smell in upstairs rooms or closets',
                    'Damp or matted insulation in the attic',
                    'Mold spots on the ceiling, especially in corners',
                ],
            ],
            [
                'h2' => 'Is a Sagging Ceiling Dangerous?',
            ],
            [
                'p' => 'Yes. Drywall holding water can collapse without warning, bringing down wet insulation and debris. If a ceiling is bulging:',
            ],
            [
                'ul' => [
                    'Keep everyone out of the room',
                    'Turn off power to lights and fans in that area',
                    'Put a bucket under the lowest point',
                    'Do not poke it unless you are sure of what you are doing, and stand to the side if you do',
                    'Call (650) 822-6798',
                ],
            ],
            [
                'h2' => 'How Ceiling Water Damage Is Repaired',
            ],
            [
                'h3' => 'Find the Source',
            ],
            [
                'p' => 'The crew traces the water with moisture meters and thermal imaging from the ceiling up to the attic, roof or unit above.',
            ],
            [
                'h3' => 'Stop Further Water',
            ],
            [
                'p' => 'A temporary tarp is set on the roof if needed, or the plumbing source is shut off until a repair is made.',
            ],
            [
                'h3' => 'Remove Wet Insulation',
            ],
            [
                'p' => 'Soaked insulation in the attic is removed so the ceiling and framing can dry.',
            ],
            [
                'h3' => 'Dry the Ceiling and Attic',
            ],
            [
                'p' => 'Dehumidifiers and air movers dry the drywall, joists and roof sheathing. Small holes may be drilled to release trapped water.',
            ],
            [
                'h3' => 'Remove Damaged Drywall',
            ],
            [
                'p' => 'Drywall that has sagged, crumbled or grown mold is cut out.',
            ],
            [
                'h3' => 'Treat for Mold',
            ],
            [
                'p' => 'Affected areas are treated with antimicrobial products.',
            ],
            [
                'h3' => 'Repair and Paint',
            ],
            [
                'p' => 'New drywall is hung, textured to match and painted.',
            ],
            [
                'h2' => 'Ceilings in Condos and Multi-Unit Buildings',
            ],
            [
                'p' => [
                    'text' => 'In Shelter Creek and other multi-unit buildings, a wet ceiling usually means water from the unit above. The source unit, your unit and sometimes common areas all need to be checked. Who pays often depends on the HOA rules and where the leak started. See condo water damage.',
                    'links' => [
                        [
                            'anchor' => 'condo water damage',
                            'href' => '/condo-water-damage',
                            'pos' => 273,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Plaster Ceilings in Older Homes',
            ],
            [
                'p' => 'Some older homes near downtown and in San Bruno Park still have plaster ceilings. Plaster holds water differently than drywall and can lose its bond to the lath above. These ceilings need careful drying and checking before repairs.',
            ],
            [
                'h2' => 'Preventing Roof Leaks',
            ],
            [
                'ul' => [
                    'Clean gutters and downspouts before the rainy season',
                    'Have the roof checked every few years, and after big storms',
                    'Replace cracked or missing shingles and worn flashing',
                    'Keep trees trimmed back from the roof',
                    'Check attic insulation for damp spots after heavy rain',
                    'Make sure attic vents and bath fans vent outside, not into the attic',
                ],
            ],
            [
                'h2' => 'Ceiling Water Damage FAQs',
            ],
            [
                'faq' => [
                    'q' => 'Can a water-stained ceiling be dried instead of replaced?',
                    'a' => [
                        'Often, yes. If the drywall is still solid and caught early, it can be dried, sealed with stain-blocking primer and repainted.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'How do I know if it is a roof leak or a plumbing leak?',
                    'a' => [
                        'If it only leaks during rain, it is usually the roof. If it leaks any time, or when a fixture above is used, it is usually plumbing.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Will insurance pay for a roof leak?',
                    'a' => [
                        'Sudden damage from a storm is often covered. Leaks from an old, worn roof are often excluded as maintenance. Check your policy.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'How long does ceiling repair take?',
                    'a' => [
                        'Drying takes a few days. Drywall repair, texture and paint usually take another one to three days.',
                    ],
                ],
            ],
            [
                'h2' => 'Attic Moisture and Hidden Roof Leaks',
            ],
            [
                'p' => 'Not every roof leak shows up as a stain right away. In many homes, water first soaks into attic insulation, which acts like a sponge. It can hold water for weeks before the drywall below finally shows a stain. By then, roof sheathing, rafters and ceiling joists may have mold. If you have had a big storm and notice a musty smell upstairs, or see a faint ring on the ceiling, check the attic with a flashlight. Look for dark or damp insulation, water marks on the underside of the roof, and rusty nail tips poking through the sheathing.',
            ],
            [
                'h2' => 'Temporary Roof Tarping After a Storm',
            ],
            [
                'p' => 'When a storm damages the roof, the first goal is to stop more water from getting in. A temporary tarp, secured over the damaged area, buys time until a roofer can make a permanent repair. A good tarp:',
            ],
            [
                'ul' => [
                    'Covers well past the damaged area on all sides',
                    'Is secured with boards, not just nails through the tarp',
                    'Runs over the ridge so water cannot get under the top edge',
                    'Is checked after each new storm',
                ],
            ],
            [
                'p' => 'Never climb onto a wet or steep roof yourself during a storm. Call for help.',
            ],
            [
                'h2' => 'Skylights, Chimneys and Flashing',
            ],
            [
                'p' => 'The most common leak points on Peninsula roofs are where something passes through or meets the roof. Skylights have seals that dry out and crack. Chimneys have flashing that pulls away as mortar ages. Vent pipes have rubber boots that split in the sun. Valleys where two roof slopes meet carry a lot of water and can leak if debris builds up. If your ceiling stain is near one of these spots, that is the first place to check.',
            ],
            [
                'h2' => 'Ceiling Water Damage in Rentals',
            ],
            [
                'p' => 'If you rent and see a ceiling stain or drip, tell your landlord or property manager in writing right away and take photos. Fast reporting helps get the leak fixed before it spreads and protects you if belongings are damaged.',
            ],
            [
                'h2' => 'Ceiling Leaks From Bathrooms Above',
            ],
            [
                'p' => 'One of the most common causes of ceiling stains that are not roof related is a bathroom on the floor above. Leaks usually come from:',
            ],
            [
                'ul' => [
                    'A worn wax ring under the toilet',
                    'Cracked grout or failed caulk around the tub or shower',
                    'A leaking shower valve inside the wall',
                    'A cracked or poorly sloped shower pan',
                    'Overflow from a tub or sink',
                ],
            ],
            [
                'p' => 'These leaks often show up only when the fixture is used, so if a stain grows after showers, start there. Fixing the source and drying the ceiling cavity prevents mold above the drywall.',
            ],
            [
                'h2' => 'More Questions About Wet Ceilings',
            ],
            [
                'faq' => [
                    'q' => 'Should I drill a hole in a bulging ceiling?',
                    'a' => [
                        'Only if you are confident it is safe. A small hole at the lowest point can release water into a bucket and reduce the chance of collapse, but stand to the side and turn off power to nearby lights first. If unsure, wait for the crew.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Can mold grow above the ceiling?',
                    'a' => [
                        'Yes. Wet insulation and the top side of drywall can grow mold where you cannot see it. Drying the ceiling cavity and checking the attic prevents that.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Will the stain come back after painting?',
                    'a' => [
                        'If the ceiling is fully dry and sealed with a stain-blocking primer first, water stains should not bleed through new paint.',
                    ],
                ],
            ],
            [
                'h2' => 'Call About Ceiling Water Damage in San Bruno',
            ],
            [
                'p' => 'For fast help with ceiling water damage in San Bruno or roof leak water damage in San Bruno, CA, call (650) 822-6798. A crew is dispatched immediately.',
            ],
        ],
        'eyebrow' => 'CEILING WATER DAMAGE • SAN BRUNO, CALIFORNIA',
    ],
    '/slab-leak-hidden-leak-water-damage' => [
        'type' => 'service',
        'kind' => 'service',
        'h1' => 'Slab Leak and Hidden Leak Water Damage in San Bruno',
        'meta' => [
            'title' => 'Slab Leak Water Damage San Bruno | Hidden Leak Help 24/7',
            'description' => 'Slab leak water damage in San Bruno, CA 94066. Hidden leaks located, floors and walls dried, repairs handled. Call (650) 822-6798 24/7.',
        ],
        'blocks' => [
            [
                'p' => 'A warm spot on the floor, a water bill that keeps climbing, a faint sound of running water when every tap is closed. Hidden leaks do their damage quietly. Our slab leak water damage San Bruno crews track down the wet areas, dry floors and walls, and handle repairs once the leak is fixed. Call and a crew is dispatched immediately.',
            ],
            [
                'h2' => 'How can you tell if a San Bruno home has a hidden leak under the floor?',
            ],
            [
                'p' => 'Watch for warm or damp spots on the floor, cracked tile, cupping wood, a musty smell, a meter that spins with every fixture off, or an unexplained jump in your water bill.',
            ],
            [
                'p' => 'Many homes in the flats of San Bruno, including parts of Belle Air, Lomita Park, Mills Park and Huntington Park, sit on concrete slabs with water lines running underneath or through the slab. Over time, those pipes corrode, shift with the soil, or rub against concrete until they leak. Because the water goes into the ground or up into flooring from below, the damage often spreads for weeks before anyone notices.',
            ],
            [
                'h2' => 'Signs of a Hidden Leak Under the Floor',
            ],
            [
                'ul' => [
                    'Warm spots on the floor, which point to a hot water line leak',
                    'Damp carpet or a musty smell with no obvious source',
                    'Cracked tile or grout lines that look darker than the rest',
                    'Hardwood or laminate that cups, buckles or lifts',
                    'Mold or mildew along baseboards',
                    'The sound of running water when nothing is on',
                    'Low water pressure throughout the house',
                    'The water heater running more than usual',
                    'A water bill that rises with no change in use',
                ],
            ],
            [
                'h2' => 'How to Check for a Leak Yourself',
            ],
            [
                'p' => 'This simple test helps confirm whether you have a leak:',
            ],
            [
                'h3' => 'Step 1: Turn Everything Off',
            ],
            [
                'p' => 'Shut off all faucets, toilets, the washing machine, dishwasher and irrigation.',
            ],
            [
                'h3' => 'Step 2: Check the Meter',
            ],
            [
                'p' => 'Find your water meter, usually in a box near the sidewalk, and note the reading or watch the small leak indicator.',
            ],
            [
                'h3' => 'Step 3: Wait',
            ],
            [
                'p' => 'Wait 30 to 60 minutes without using any water.',
            ],
            [
                'h3' => 'Step 4: Check Again',
            ],
            [
                'p' => 'If the reading changed or the leak indicator moved, water is going somewhere, and a hidden leak is likely.',
            ],
            [
                'h2' => 'Leak Detection in San Bruno, CA',
            ],
            [
                'p' => 'Leak detection in San Bruno, CA starts with finding where water is getting into the structure. The crew uses non-invasive tools to map the wet area before anything is opened up:',
            ],
            [
                'ul' => [
                    'Moisture meters to measure wetness in floors, walls and baseboards',
                    'Thermal imaging cameras that show cool or warm spots where water is spreading',
                    'Acoustic listening devices that pick up the sound of water escaping a pipe',
                    'Hygrometers to check humidity in wall cavities and under flooring',
                ],
            ],
            [
                'p' => 'Mapping the wet area first means only the smallest possible section of floor or wall has to be opened.',
            ],
            [
                'h2' => 'What Happens After the Leak Is Found',
            ],
            [
                'h3' => 'Pipe Repair',
            ],
            [
                'p' => 'A plumber repairs the line by spot repair through the slab, rerouting it through walls or ceiling, or repiping the house. The right choice depends on the age of the plumbing and how many leaks there have been.',
            ],
            [
                'h3' => 'Drying the Slab and Floors',
            ],
            [
                'p' => 'Concrete holds water for a long time. Dehumidifiers and air movers dry the slab, and flooring is lifted where needed to let it dry.',
            ],
            [
                'h3' => 'Wall and Baseboard Drying',
            ],
            [
                'p' => 'Water from slab leaks wicks up into drywall and baseboards. These are dried or replaced depending on how wet they are.',
            ],
            [
                'h3' => 'Mold Prevention',
            ],
            [
                'p' => 'Areas that stayed wet for weeks are checked for mold and treated.',
            ],
            [
                'h3' => 'Flooring Repairs',
            ],
            [
                'p' => 'Once dry, damaged flooring is replaced or refinished.',
            ],
            [
                'h2' => 'Hidden Leaks Inside Walls and Ceilings',
            ],
            [
                'p' => 'Hidden leaks are not always under the slab. Pipes inside walls, behind showers, under sinks and above ceilings can drip for months. Common spots in San Bruno homes:',
            ],
            [
                'ul' => [
                    'Behind showers and tubs with old valves',
                    'Under kitchen and bathroom sinks',
                    'Behind washing machines',
                    'Around toilets with failing wax rings',
                    'In walls shared with a bathroom in condos and townhomes',
                ],
            ],
            [
                'h2' => 'Galvanized and Copper Pipes in San Bruno Homes',
            ],
            [
                'p' => [
                    'text' => 'Homes built in the 1940s and 1950s often still have galvanized steel water lines, which rust from the inside. Homes from the 1960s and later often have copper, which can develop pinhole leaks. If your home has had more than one leak, it may be worth asking a plumber about repiping. See burst pipe water damage.',
                    'links' => [
                        [
                            'anchor' => 'burst pipe water damage',
                            'href' => '/burst-pipe-water-damage',
                            'pos' => 311,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Hidden Leaks and Hardwood Floors',
            ],
            [
                'p' => [
                    'text' => 'A slow leak under hardwood can ruin a floor that has lasted 70 years. Caught early, floors can often be dried in place with specialized mats. See hardwood floor water damage.',
                    'links' => [
                        [
                            'anchor' => 'hardwood floor water damage',
                            'href' => '/hardwood-floor-water-damage',
                            'pos' => 174,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Slab Leak FAQs',
            ],
            [
                'faq' => [
                    'q' => 'Does homeowners insurance cover slab leaks?',
                    'a' => [
                        'Many policies cover the water damage from a sudden slab leak, and some cover the cost of accessing the pipe. The pipe repair itself is often excluded. Check your policy.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Can a leak be found without breaking floors?',
                    'a' => [
                        'Yes. Thermal imaging, moisture meters and acoustic tools usually narrow it down to a small area before anything is opened.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'How long does a slab take to dry?',
                    'a' => [
                        'Concrete dries slowly. Depending on how long the leak ran, it can take several days to a week or more with dehumidifiers.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Is a hidden leak an emergency?',
                    'a' => [
                        'If it is causing active water damage, yes. The longer it runs, the more flooring, walls and framing are affected, and the higher the mold risk.',
                    ],
                ],
            ],
            [
                'h2' => 'Slab Leak Repair Options Compared',
            ],
            [
                'p' => 'Once a leak under the slab is found, a plumber usually recommends one of three approaches. Each has trade-offs.',
            ],
            [
                'h3' => 'Spot Repair',
            ],
            [
                'p' => 'The plumber opens the floor directly above the leak, repairs the pipe and patches the concrete. It is the most direct fix, but it means cutting into flooring, and older pipes may leak again in another spot.',
            ],
            [
                'h3' => 'Reroute',
            ],
            [
                'p' => 'The plumber abandons the leaking line under the slab and runs a new line through walls, the attic or the crawl space. It avoids breaking the slab and often makes future repairs easier.',
            ],
            [
                'h3' => 'Repipe',
            ],
            [
                'p' => 'If several leaks have happened or the pipes are old galvanized, replacing the entire water supply system may be the most lasting fix. It costs more up front but removes the source of future leaks.',
            ],
            [
                'p' => 'Whichever option you choose, the water damage around the leak still needs to be dried, and damaged flooring and drywall repaired.',
            ],
            [
                'h2' => 'Hidden Leaks in Condos and Townhomes',
            ],
            [
                'p' => [
                    'text' => 'In condos and townhomes, a hidden leak in your unit can affect the unit below or next door, and a leak in a neighbor\'s unit can show up in yours. Shared walls with bathrooms and kitchens are common trouble spots. If you see a stain or smell mustiness on a shared wall, let your HOA or property manager know so both units can be checked. See condo water damage.',
                    'links' => [
                        [
                            'anchor' => 'condo water damage',
                            'href' => '/condo-water-damage',
                            'pos' => 360,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'How Long Can a Hidden Leak Go Unnoticed?',
            ],
            [
                'p' => 'Longer than most people think. A slow leak under a slab or inside a wall can drip for weeks or months before showing visible signs. During that time it can soak insulation, rot framing and grow mold. That is why watching your water bill and checking the meter once in a while are two of the simplest ways to catch a hidden leak early.',
            ],
            [
                'h2' => 'Hidden Leaks and Your Water Bill',
            ],
            [
                'p' => 'San Bruno residents get water service from the city, so your bill is one of the best early warnings of a hidden leak. Compare your recent bills to the same months last year. A steady rise with no change in household use, new appliances or irrigation is worth investigating. Running a quick meter test with everything turned off takes less than an hour and can confirm whether water is leaking somewhere you cannot see.',
            ],
            [
                'h2' => 'Irrigation and Outdoor Leaks',
            ],
            [
                'p' => 'Not every hidden leak is inside the house. Broken irrigation lines, leaking hose bibs and a damaged main line between the meter and the house can also waste water. Outdoor leaks can soften soil near the foundation and send water into crawl spaces and under slabs.',
            ],
            [
                'h2' => 'What to Expect During a Slab Leak Visit',
            ],
            [
                'p' => 'The crew starts by asking about your water bill, any warm or damp spots, and when you first noticed a problem. Then they check moisture in floors and walls, scan with a thermal camera, and mark the wet area. You get photos and a clear explanation of what was found, what needs drying, and which areas may need flooring lifted. Once your plumber repairs the line, drying and repairs can begin.',
            ],
            [
                'h2' => 'Call About Slab Leak Water Damage in San Bruno',
            ],
            [
                'p' => 'For fast help with slab leak water damage in San Bruno and hidden leak drying across 94066, call (650) 822-6798. A crew is dispatched immediately.',
            ],
        ],
        'eyebrow' => 'SLAB LEAK WATER DAMAGE • SAN BRUNO, CALIFORNIA',
    ],
    '/water-heater-appliance-leak' => [
        'type' => 'service',
        'kind' => 'service',
        'h1' => '24/7 Water Heater and Appliance Leak Cleanup in San Bruno',
        'meta' => [
            'title' => 'Water Heater Leak Cleanup San Bruno | 24/7 Appliance Leak Help',
            'description' => 'Water heater leak cleanup and appliance leak drying in San Bruno, CA 94066. Fast extraction and repairs. Call (650) 822-6798 24/7.',
        ],
        'blocks' => [
            [
                'p' => 'A water heater tank gives out in the garage. A washing machine hose bursts while you are at work. A dishwasher leaks under the cabinets for weeks. Our water heater leak cleanup San Bruno crews extract the water, dry floors, cabinets and walls, and get your home back to normal. Call now and a crew is dispatched immediately.',
            ],
            [
                'h2' => 'What should you do when a water heater leaks in a San Bruno garage or closet?',
            ],
            [
                'p' => 'Shut off the cold water valve on top of the tank, turn off the gas or breaker, keep clear of hot water, and call (650) 822-6798 for extraction and drying.',
            ],
            [
                'p' => 'Most San Bruno homes keep the water heater in the garage, a hall closet or a utility area. A typical tank holds 40 to 50 gallons, and once it fails, the cold water line keeps refilling it. That means a leaking tank can keep putting water on your floor until the supply is shut off.',
            ],
            [
                'h2' => 'How to Shut Down a Leaking Water Heater',
            ],
            [
                'h3' => '1. Turn Off the Water',
            ],
            [
                'p' => 'Find the cold water inlet valve on the pipe at the top of the tank and turn it clockwise until it stops. If you cannot reach it, shut the main water valve to the house.',
            ],
            [
                'h3' => '2. Turn Off the Energy Source',
            ],
            [
                'p' => 'For a gas heater, turn the gas control knob to "off" or "pilot." For an electric heater, switch off its breaker.',
            ],
            [
                'h3' => '3. Stay Safe',
            ],
            [
                'p' => 'Water from the tank can be scalding. Keep children and pets away and let it cool before touching anything.',
            ],
            [
                'h3' => '4. Take Photos',
            ],
            [
                'p' => 'Photograph the tank, the leak and the wet area.',
            ],
            [
                'h3' => '5. Call for Help',
            ],
            [
                'p' => 'Call (650) 822-6798 to start extraction and drying.',
            ],
            [
                'h2' => 'Common Appliance Leak Sources in San Bruno, CA',
            ],
            [
                'p' => 'An appliance leak in San Bruno, CA usually comes from one of these:',
            ],
            [
                'ul' => [
                    'Water heaters: corroded tanks, failed relief valves, loose fittings',
                    'Washing machines: burst or cracked supply hoses, drain hose leaks, a washing machine overflow from a clogged drain',
                    'Dishwashers: worn door seals, loose drain lines, failed inlet valves',
                    'Refrigerators: cracked ice maker lines, clogged defrost drains',
                    'Garbage disposals: cracked housings and loose connections under the sink',
                    'HVAC systems: clogged condensate lines and overflowing drip pans',
                    'Water softeners and filtration systems: loose fittings and failed valves',
                ],
            ],
            [
                'h2' => 'Why Slow Appliance Leaks Cause Big Damage',
            ],
            [
                'p' => 'A burst hose is obvious. A slow leak is not. Dishwashers and refrigerators leak under cabinets and flooring where you cannot see. By the time a floor lifts or a cabinet base swells, water may have soaked the subfloor for weeks. In San Bruno\'s cool, damp climate, that is plenty of time for mold to start.',
            ],
            [
                'h2' => 'How Appliance Leak Damage Is Cleaned Up',
            ],
            [
                'h3' => 'Extraction',
            ],
            [
                'p' => [
                    'text' => 'Standing water is removed from floors and carpet. See emergency water extraction.',
                    'links' => [
                        [
                            'anchor' => 'emergency water extraction',
                            'href' => '/emergency-water-extraction',
                            'pos' => 81,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Moisture Mapping',
            ],
            [
                'p' => 'Meters and thermal cameras show how far water moved under cabinets, flooring and into walls.',
            ],
            [
                'h3' => 'Cabinet Drying',
            ],
            [
                'p' => 'Toe kicks are removed and dry air is forced under cabinets. Particleboard that has swollen is replaced.',
            ],
            [
                'h3' => 'Floor and Subfloor Drying',
            ],
            [
                'p' => 'Flooring is lifted where needed so the subfloor can dry.',
            ],
            [
                'h3' => 'Wall Drying',
            ],
            [
                'p' => 'Drywall behind appliances is dried with air movers, or cut and replaced if it is soaked.',
            ],
            [
                'h3' => 'Mold Prevention',
            ],
            [
                'p' => 'Areas that stayed wet are treated with antimicrobial products.',
            ],
            [
                'h3' => 'Repairs',
            ],
            [
                'p' => 'Flooring, cabinets, baseboards and drywall are repaired once dry.',
            ],
            [
                'h2' => 'Water Heaters in Garages',
            ],
            [
                'p' => [
                    'text' => 'When a water heater fails in a garage, the water spreads across the slab, into stored boxes, and under drywall. Garage walls may need to be cut a few inches up to dry the framing. See flooded garage cleanup.',
                    'links' => [
                        [
                            'anchor' => 'flooded garage cleanup',
                            'href' => '/garage-in-law-unit-flooding',
                            'pos' => 207,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Water Heaters in Closets and Upper Floors',
            ],
            [
                'p' => [
                    'text' => 'A water heater in an interior closet or upper floor can send water through the ceiling below and into multiple rooms. These leaks need fast extraction and drying of walls and ceilings. See ceiling water damage.',
                    'links' => [
                        [
                            'anchor' => 'ceiling water damage',
                            'href' => '/roof-leak-ceiling-water-damage',
                            'pos' => 210,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Preventing Appliance Leaks',
            ],
            [
                'ul' => [
                    'Replace rubber washing machine hoses with braided steel hoses every five years',
                    'Install a drain pan under the water heater and washer',
                    'Add water leak sensors near appliances that alert your phone',
                    'Check under the sink and dishwasher every few months',
                    'Flush the water heater once a year to reduce sediment',
                    'Replace water heaters that are 10 to 15 years old before they fail',
                    'Keep refrigerator ice maker lines from kinking or rubbing',
                ],
            ],
            [
                'h2' => 'Water Heater and Appliance Leak FAQs',
            ],
            [
                'faq' => [
                    'q' => 'How long does a water heater last?',
                    'a' => [
                        'Most tank water heaters last 8 to 12 years. Rust at the base, rusty hot water or popping noises can mean it is near the end.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Is a leaking water heater dangerous?',
                    'a' => [
                        'The main risks are scalding water, electrical hazards and gas appliances getting wet. Shut it down and keep clear until it is checked.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Does insurance cover appliance leaks?',
                    'a' => [
                        'Sudden leaks are often covered. Slow leaks over time and the appliance itself are often excluded. Check your policy.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Can my kitchen cabinets be saved?',
                    'a' => [
                        'Solid wood cabinets often can be dried in place. Particleboard bases that have swollen usually need replacing.',
                    ],
                ],
            ],
            [
                'h2' => 'Tank vs Tankless Water Heater Leaks',
            ],
            [
                'p' => 'Tank water heaters usually fail at the bottom, where sediment builds up and the tank rusts through. When they go, they can release the full tank and keep refilling until the cold supply is shut off. Tankless water heaters do not store water, so a failure rarely floods a room, but their fittings, pressure relief valves and condensate lines can still leak slowly inside walls or closets. Both types should have their connections checked once a year.',
            ],
            [
                'h2' => 'Washing Machine Overflow: What Gets Damaged',
            ],
            [
                'p' => 'A washing machine overflow can put a lot of water on the floor fast, especially if a supply hose bursts while nobody is home. In a garage, water spreads across the slab and into stored items. In an interior laundry room, it soaks flooring, baseboards and the bottom of drywall, and can reach the ceiling below on a second floor. Laundry water is usually treated as Category 2 because it carries soap, lint and organic matter, so cleanup includes sanitizing as well as drying.',
            ],
            [
                'h2' => 'Leak Sensors and Automatic Shutoff Valves',
            ],
            [
                'p' => 'Two simple devices can turn a disaster into a minor cleanup:',
            ],
            [
                'ul' => [
                    'Water leak sensors: small battery-powered pucks placed under sinks, behind toilets and next to water heaters and washers; they sound an alarm or send a phone alert when they detect water',
                    'Automatic shutoff valves: installed on the main water line or on individual appliances, they close automatically when a leak is detected',
                ],
            ],
            [
                'p' => 'For homes that sit empty during the day, or second homes and rentals, these devices are some of the best protection you can buy.',
            ],
            [
                'h2' => 'Refrigerator and Ice Maker Line Leaks',
            ],
            [
                'p' => 'The thin plastic or copper line that feeds an ice maker or water dispenser is easy to kink or crack when the fridge is moved. A slow drip behind the refrigerator can soak the subfloor for weeks before the flooring lifts. If you see warping in front of the fridge, pull it out and check the line.',
            ],
            [
                'h2' => 'Dishwasher Leaks Under Kitchen Cabinets',
            ],
            [
                'p' => 'Dishwasher leaks are easy to miss because water spreads under the machine and the cabinets beside it. Signs include:',
            ],
            [
                'ul' => [
                    'Flooring that lifts or darkens in front of the dishwasher',
                    'A musty smell when you open the sink cabinet',
                    'Swollen toe kicks or cabinet bottoms',
                    'Water on the floor after a wash cycle',
                ],
            ],
            [
                'p' => 'The fix starts with repairing the dishwasher connection or door seal. Then the cabinets, subfloor and nearby walls are dried, often by removing toe kicks and forcing dry air underneath.',
            ],
            [
                'h2' => 'More Questions About Appliance Leaks',
            ],
            [
                'faq' => [
                    'q' => 'How do I know if my water heater is leaking or just condensing?',
                    'a' => [
                        'Condensation forms small drops on the outside of the tank, often when it first heats cold water. A real leak keeps growing, leaves rust stains, or comes from fittings, the relief valve or the bottom of the tank.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Should I replace my washing machine hoses?',
                    'a' => [
                        'Yes, if they are rubber or more than five years old. Braided steel hoses last longer and are far less likely to burst.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Can a refrigerator leak damage the floor below?',
                    'a' => [
                        'Yes. Slow leaks from ice maker lines can soak the subfloor and, on upper floors or in condos, reach the ceiling below.',
                    ],
                ],
            ],
            [
                'h2' => 'Call for Water Heater Leak Cleanup in San Bruno',
            ],
            [
                'p' => 'For fast water heater leak cleanup in San Bruno and help with any appliance leak in San Bruno, CA, call (650) 822-6798. A crew is dispatched immediately.',
            ],
        ],
        'eyebrow' => 'WATER HEATER LEAK CLEANUP • SAN BRUNO, CALIFORNIA',
    ],
    '/mold-remediation' => [
        'type' => 'service',
        'kind' => 'service',
        'h1' => 'Professional Mold Remediation in San Bruno, CA',
        'meta' => [
            'title' => 'Mold Remediation San Bruno | Mold Removal After Water Damage',
            'description' => 'Mold remediation in San Bruno, CA 94066. Containment, removal and moisture control for foggy Peninsula homes. Call (650) 822-6798.',
        ],
        'blocks' => [
            [
                'p' => 'A musty smell in a closet, black spots on a bathroom ceiling, fuzzy growth on the underside of floor joists. In San Bruno\'s damp, foggy climate, mold grows fast after any leak. Our mold remediation San Bruno crews contain the area, remove the growth, fix the moisture problem and dry everything out. Call now and a crew is dispatched immediately.',
            ],
            [
                'h2' => 'Why is mold common in San Bruno\'s foggier northern and western neighborhoods?',
            ],
            [
                'p' => 'The marine layer keeps indoor and outdoor humidity high for much of the year. Walls, closets and crawl spaces stay damp, so even small leaks grow mold quickly.',
            ],
            [
                'p' => 'The northern and western parts of San Bruno, including Crestmoor, Rollingwood, Portola Highlands and Pacific Heights, sit in the path of fog rolling in from the Pacific. Cool, damp air settles into homes, especially in closets on exterior walls, bathrooms without strong fans, and crawl spaces under raised floors. Add a leak, a flood or a storm, and mold has everything it needs: moisture, organic material and time.',
            ],
            [
                'h2' => 'Signs You May Need Mold Removal in San Bruno, CA',
            ],
            [
                'p' => 'Call about mold removal in San Bruno, CA if you notice:',
            ],
            [
                'ul' => [
                    'A persistent musty or earthy smell',
                    'Black, green, gray or white spots on walls, ceilings or wood',
                    'Peeling paint or bubbling drywall',
                    'Mold on window frames or sills that keeps coming back',
                    'Damp, cold walls in closets or behind furniture',
                    'Allergy-like symptoms that improve when you leave the house',
                    'Recent water damage that was not fully dried',
                ],
            ],
            [
                'h2' => 'Mold After Water Damage',
            ],
            [
                'p' => 'Mold after water damage is the most common reason for remediation. Mold can begin growing on wet drywall, wood and carpet within 24 to 72 hours. If a leak, flood or sewage backup was not dried properly, mold may be growing inside walls or under floors even if you cannot see it. This is why every water damage job includes moisture readings until materials are fully dry.',
            ],
            [
                'h2' => 'Our Mold Remediation Process',
            ],
            [
                'h3' => '1. Inspection',
            ],
            [
                'p' => 'The crew looks for visible mold, measures moisture in walls, floors and framing, and finds the water source feeding the growth.',
            ],
            [
                'h3' => '2. Containment',
            ],
            [
                'p' => 'Plastic sheeting and negative air pressure seal off the affected area so spores do not spread to the rest of the home.',
            ],
            [
                'h3' => '3. Air Filtration',
            ],
            [
                'p' => 'HEPA air scrubbers clean the air during the work.',
            ],
            [
                'h3' => '4. Removal',
            ],
            [
                'p' => 'Mold-damaged drywall, insulation, carpet and other porous materials are removed and bagged. Framing and hard surfaces are cleaned.',
            ],
            [
                'h3' => '5. Cleaning and Treatment',
            ],
            [
                'p' => 'Surfaces are HEPA vacuumed, cleaned and treated with antimicrobial products.',
            ],
            [
                'h3' => '6. Drying',
            ],
            [
                'p' => 'Dehumidifiers dry the area to normal moisture levels so mold does not return.',
            ],
            [
                'h3' => '7. Repairs',
            ],
            [
                'p' => 'Drywall, insulation and finishes are replaced.',
            ],
            [
                'h2' => 'Where Mold Grows in San Bruno Homes',
            ],
            [
                'h3' => 'Crawl Spaces',
            ],
            [
                'p' => [
                    'text' => 'Wet soil and damp air under raised homes lead to mold on joists and subfloor. See crawl space water damage.',
                    'links' => [
                        [
                            'anchor' => 'crawl space water damage',
                            'href' => '/crawl-space-water-damage',
                            'pos' => 107,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Bathrooms',
            ],
            [
                'p' => 'Showers without good ventilation, leaking tub surrounds and toilet seals create constant moisture.',
            ],
            [
                'h3' => 'Closets on Exterior Walls',
            ],
            [
                'p' => 'Cold walls plus stored clothing and boxes trap humid air. Mold often shows up behind hanging clothes.',
            ],
            [
                'h3' => 'Attics',
            ],
            [
                'p' => 'Roof leaks and bath fans venting into the attic leave insulation and sheathing damp.',
            ],
            [
                'h3' => 'Garages',
            ],
            [
                'p' => 'Flooded garages that dry slowly grow mold on drywall, cardboard and wood.',
            ],
            [
                'h3' => 'Behind Appliances and Under Sinks',
            ],
            [
                'p' => 'Slow leaks under sinks, dishwashers and refrigerators feed hidden mold.',
            ],
            [
                'h2' => 'Mold Remediation vs Mold Removal',
            ],
            [
                'p' => 'The terms are often used the same way, but there is a difference. Removal means taking out the visible growth. Remediation means containing the area, removing the growth, cleaning surrounding surfaces, and fixing the moisture problem so the mold does not come back. Without fixing the moisture, mold returns.',
            ],
            [
                'h2' => 'Is Mold Dangerous?',
            ],
            [
                'p' => 'Mold can trigger allergies, asthma and respiratory irritation, especially in children, older adults and people with weak immune systems. Some molds produce compounds that can cause stronger reactions. If someone in your home has health concerns, talk to a doctor. Either way, mold should be removed rather than painted over.',
            ],
            [
                'h2' => 'Why Bleach Is Not Enough',
            ],
            [
                'p' => 'Bleach may lighten mold on hard, non-porous surfaces, but it does not reach roots inside drywall, wood or grout. It can also add moisture that helps mold grow back. Porous materials with mold growth usually need to be removed and replaced.',
            ],
            [
                'h2' => 'Preventing Mold in a Foggy Climate',
            ],
            [
                'ul' => [
                    'Run bathroom fans during and 30 minutes after showers',
                    'Use a dehumidifier in closets, basements and rooms that feel damp',
                    'Keep indoor humidity between 30 and 50 percent',
                    'Leave space between furniture and exterior walls',
                    'Fix leaks right away and dry wet areas within 24 hours',
                    'Check the crawl space after heavy rain',
                ],
            ],
            [
                'p' => [
                    'text' => 'More tips are in the fog and mold prevention guide.',
                    'links' => [
                        [
                            'anchor' => 'fog and mold prevention guide',
                            'href' => '/resources/peninsula-fog-mold-prevention',
                            'pos' => 51,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Mold Remediation FAQs',
            ],
            [
                'faq' => [
                    'q' => 'How long does mold remediation take?',
                    'a' => [
                        'Small areas often take one to two days. Larger jobs with drying and repairs can take a week or more.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Can I stay home during mold remediation?',
                    'a' => [
                        'Often yes, because the work area is contained. For large jobs or sensitive family members, staying elsewhere may be better.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Will mold come back?',
                    'a' => [
                        'Not if the moisture source is fixed and the area is dried properly. Mold needs moisture to grow, so the long-term answer is controlling water: repairing leaks quickly, improving ventilation in bathrooms and closets, keeping crawl spaces dry, and running a dehumidifier in rooms that stay damp. In foggy San Bruno neighborhoods, a simple humidity monitor helps you spot rising moisture before mold has a chance to return.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Does insurance cover mold?',
                    'a' => [
                        'Mold from a sudden covered water loss is sometimes covered. Mold from long-term leaks or humidity is often excluded. Check your policy.',
                    ],
                ],
            ],
            [
                'h2' => 'Mold Testing: When It Helps',
            ],
            [
                'p' => 'If you can see mold, testing usually is not needed to start remediation; visible growth should be removed either way. Testing can help when:',
            ],
            [
                'ul' => [
                    'You smell mold but cannot find it',
                    'You want to confirm an area is clear after remediation',
                    'Someone in the home has health concerns and a doctor has asked about exposure',
                    'A buyer, seller or landlord needs documentation',
                ],
            ],
            [
                'p' => 'Air samples compare indoor spore levels to outdoor levels. Surface samples identify what is growing on a specific spot. Testing is a tool, not a fix; the fix is always removing the growth and controlling moisture.',
            ],
            [
                'h2' => 'Mold in Rentals: What Tenants and Landlords Should Know',
            ],
            [
                'p' => 'In rental homes and apartments across San Bruno, mold usually comes from leaks, poor ventilation or both. Tenants should report leaks, water stains and mold to the landlord or property manager in writing as soon as they notice them, with photos. Landlords should fix the moisture source and have mold removed properly, not just painted over. Clear records of the cleanup protect everyone and make it easier to show the unit was restored to a healthy condition.',
            ],
            [
                'h2' => 'Common Places Mold Hides After a Leak',
            ],
            [
                'p' => 'After water damage, mold often grows where nobody looks:',
            ],
            [
                'ul' => [
                    'Behind baseboards and under the bottom edge of drywall',
                    'Under carpet pad and on the tack strip',
                    'Inside sink cabinets on the back wall',
                    'On the underside of subfloor in crawl spaces',
                    'Inside wall cavities behind showers and tubs',
                    'Above ceiling drywall below a bathroom',
                ],
            ],
            [
                'p' => 'Moisture meters and thermal cameras help find these spots without tearing everything open.',
            ],
            [
                'h2' => 'Mold After Floods and Sewage Backups',
            ],
            [
                'p' => 'Mold that grows after floodwater or sewage is handled more carefully because the water was contaminated to begin with. Porous materials are removed, surfaces are disinfected as well as cleaned, and containment is stricter. If your home had a flood or backup and you now see or smell mold, mention it when you call so the crew arrives prepared.',
            ],
            [
                'h2' => 'How Long After Remediation Can You Use the Room?',
            ],
            [
                'p' => 'Once mold is removed, surfaces are cleaned and the area is dry, the room can usually be used again right away, even before cosmetic repairs are finished. Larger jobs may need air quality checks before containment comes down. The crew explains when each area is ready.',
            ],
            [
                'h2' => 'Mold on Window Sills and Frames',
            ],
            [
                'p' => 'Window sill mold is one of the most common complaints in foggy San Bruno neighborhoods. Condensation runs down the glass every morning and soaks the sill and frame. Small surface spots can be cleaned with soap and water and dried well. Wiping condensation each morning, keeping blinds open for airflow, and running a dehumidifier in the room help stop it from coming back. If the wood under the paint is soft or the mold returns quickly, the sill may have hidden damage that needs attention.',
            ],
            [
                'h2' => 'Call for Mold Remediation in San Bruno',
            ],
            [
                'p' => 'For mold remediation in San Bruno and mold removal in San Bruno, CA that stops the problem at the source, call (650) 822-6798. A crew is dispatched immediately.',
            ],
        ],
        'eyebrow' => 'MOLD REMEDIATION • SAN BRUNO, CALIFORNIA',
    ],
    '/condo-water-damage' => [
        'type' => 'service',
        'kind' => 'service',
        'h1' => 'Emergency Condo and Apartment Water Damage Restoration in San Bruno',
        'meta' => [
            'title' => 'Condo Water Damage San Bruno | Unit-to-Unit Leak Cleanup 24/7',
            'description' => 'Condo water damage in San Bruno, CA 94066. Unit-to-unit leaks traced, dried and documented for owners and HOAs. Call (650) 822-6798 24/7.',
        ],
        'blocks' => [
            [
                'p' => 'Water does not stay in one unit. A leak upstairs comes through your ceiling, a burst pipe in a shared wall soaks two homes, a water heater floods the unit below. Our condo water damage San Bruno crews trace the source, dry every affected unit, and keep clear records for owners, tenants and HOAs. Call any time and a crew is dispatched immediately.',
            ],
            [
                'h2' => 'Who pays when water leaks from the condo above in San Bruno?',
            ],
            [
                'p' => 'It depends on where the leak started and your HOA\'s governing documents. Generally, the unit owner covers their unit\'s interior, and the HOA covers common elements like shared pipes and roofs.',
            ],
            [
                'p' => 'In most California condo associations, responsibility follows the source. If water comes from a fixture or appliance inside one unit, that owner\'s policy (often called an HO-6 policy) usually handles the damage. If it comes from a common element like the roof, a main riser or shared plumbing, the HOA\'s master policy usually applies. Your HOA\'s CC&Rs spell out the details, so read them or ask your property manager. The crew does not decide responsibility, but the photos and moisture logs make it much easier for everyone to sort out.',
            ],
            [
                'h2' => 'Common Sources of Condo and Apartment Water Damage in San Bruno, CA',
            ],
            [
                'p' => 'Apartment water damage in San Bruno, CA usually starts with:',
            ],
            [
                'ul' => [
                    'A washing machine, dishwasher or water heater in the unit above',
                    'Overflowing toilets, showers or tubs upstairs',
                    'Burst or leaking supply lines inside shared walls',
                    'Roof leaks reaching top-floor units',
                    'Sewer backups affecting ground-floor units',
                    'Sprinkler line breaks in common areas',
                    'HVAC condensate leaks above ceilings',
                ],
            ],
            [
                'h2' => 'Why Unit-to-Unit Leaks Are Complicated',
            ],
            [
                'p' => 'A unit-to-unit leak affects more than one home. Water can travel through floor and ceiling cavities, along pipes and into neighboring walls. Each unit may have different owners, tenants and insurance. That means:',
            ],
            [
                'ul' => [
                    'Every affected unit has to be checked, not just the one with visible damage',
                    'Access needs to be coordinated with several people',
                    'Drying in one unit may depend on drying in another',
                    'Clear records are needed for each owner and the HOA',
                ],
            ],
            [
                'h2' => 'How Condo Water Damage Is Handled',
            ],
            [
                'h3' => 'Find the Source',
            ],
            [
                'p' => 'The crew traces moisture with meters and thermal imaging, working from the visible damage back to the source unit.',
            ],
            [
                'h3' => 'Stop the Water',
            ],
            [
                'p' => 'The source is shut off. In some buildings this means shutting off water to a stack or section.',
            ],
            [
                'h3' => 'Check Every Affected Unit',
            ],
            [
                'p' => 'Units above, below and beside the source are checked for hidden moisture.',
            ],
            [
                'h3' => 'Extract and Dry',
            ],
            [
                'p' => 'Standing water is removed and drying equipment is set up in each affected unit.',
            ],
            [
                'h3' => 'Document',
            ],
            [
                'p' => 'Photos, moisture readings and drying logs are kept for each unit separately.',
            ],
            [
                'h3' => 'Repair',
            ],
            [
                'p' => 'Drywall, ceilings, flooring and finishes are restored once dry.',
            ],
            [
                'h2' => 'Shelter Creek and San Bruno Condos',
            ],
            [
                'p' => 'Shelter Creek in Crestmoor is one of San Bruno\'s largest condominium communities, and there are many other multi-unit buildings around Tanforan, along El Camino Real and near downtown. Common issues in these buildings include water heaters in closets, stacked bathrooms where a leak in one unit reaches several below, and older plumbing in shared walls.',
            ],
            [
                'h2' => 'For Renters and Landlords',
            ],
            [
                'p' => 'If you rent, report water damage to your landlord or property manager right away. They are usually responsible for repairs to the building, while your renters insurance may cover your belongings. For landlords, quick drying protects the property and helps tenants get back to normal. The crew works with property managers and keeps records that can be shared with all parties.',
            ],
            [
                'h2' => 'Ceilings and Walls in Multi-Unit Buildings',
            ],
            [
                'p' => [
                    'text' => 'Water from above often shows up first on ceilings. See ceiling water damage for more on how wet ceilings are dried and repaired. If mold has started, see mold remediation.',
                    'links' => [
                        [
                            'anchor' => 'ceiling water damage',
                            'href' => '/roof-leak-ceiling-water-damage',
                            'pos' => 76,
                        ],
                        [
                            'anchor' => 'mold remediation',
                            'href' => '/mold-remediation',
                            'pos' => 247,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'What to Do Right Now',
            ],
            [
                'ul' => [
                    'If water is coming from upstairs, knock on your neighbor\'s door or call building management.',
                    'If you can find it, shut off the water valve for your unit.',
                    'Turn off power to wet areas if it is safe.',
                    'Photograph damage in your unit before anything is moved.',
                    'Notify your HOA or property manager in writing.',
                    'Call (650) 822-6798 to start drying.',
                ],
            ],
            [
                'h2' => 'Condo Water Damage FAQs',
            ],
            [
                'faq' => [
                    'q' => 'What is an HO-6 policy?',
                    'a' => [
                        'An HO-6 policy is condo owners insurance. It usually covers the interior of your unit and your belongings, while the HOA master policy covers the building structure and common areas.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'What if my neighbor will not let the crew in?',
                    'a' => [
                        'Contact your HOA or property manager. Most CC&Rs give the association access rights to stop ongoing damage.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Can you work with our property manager?',
                    'a' => [
                        'Yes. The crew coordinates with property managers, HOA boards and owners, and shares the same records with everyone involved.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'How long does drying take in a condo?',
                    'a' => [
                        'Usually three to five days per unit, sometimes longer when water traveled through several floors.',
                    ],
                ],
            ],
            [
                'h2' => 'Documentation Checklist for Owners and HOAs',
            ],
            [
                'p' => 'When water moves between units, good records make every conversation easier. Here is what owners, tenants and HOA boards usually need:',
            ],
            [
                'h3' => 'Source Information',
            ],
            [
                'p' => 'Where the water came from, which unit it started in, and what failed, such as a supply line, toilet seal or water heater.',
            ],
            [
                'h3' => 'Affected Areas',
            ],
            [
                'p' => 'A list of every unit and common area that took on water, with photos before cleanup began.',
            ],
            [
                'h3' => 'Moisture Records',
            ],
            [
                'p' => 'Daily moisture readings for each affected unit, showing when each area reached normal levels.',
            ],
            [
                'h3' => 'Removed Materials',
            ],
            [
                'p' => 'A list of materials removed from each unit, such as drywall, carpet pad or baseboards, with photos.',
            ],
            [
                'h3' => 'Scope of Repairs',
            ],
            [
                'p' => 'A written scope of repairs for each unit, so owners and the HOA can see exactly what is being restored.',
            ],
            [
                'p' => 'The crew keeps these records separately for each unit, so nobody has to sort through someone else\'s information.',
            ],
            [
                'h2' => 'Common Areas, Hallways and Parking Garages',
            ],
            [
                'p' => 'Water damage in a building does not always stay inside units. Hallway carpet, stairwells, laundry rooms, elevators and underground parking can all take on water. These spaces are usually the HOA\'s responsibility. Drying them quickly keeps the building usable for everyone and prevents mold from spreading into walls shared with units.',
            ],
            [
                'h2' => 'Preventing Leaks in Multi-Unit Buildings',
            ],
            [
                'ul' => [
                    'Replace rubber washing machine hoses with braided steel',
                    'Put drain pans under water heaters and washers, especially on upper floors',
                    'Install leak sensors in water heater closets and under sinks',
                    'Inspect toilet supply lines and shower pans every few years',
                    'Make sure every owner knows where their unit\'s water shutoff is',
                    'Schedule roof and gutter checks before the rainy season',
                ],
            ],
            [
                'h2' => 'Water Heater Closets in Condos',
            ],
            [
                'p' => 'Many San Bruno condos keep the water heater in a small closet inside the unit or off a balcony. When a tank fails, water spreads into hallways, carpet and the unit below before anyone notices, especially if the owner is at work. A drain pan with a line to a floor drain, a leak sensor, and replacing tanks before they reach the end of their life are the best protection. If your building has several units with water heaters of the same age, the HOA may want to plan replacements together.',
            ],
            [
                'h2' => 'When the Leak Comes From a Unit Nobody Is In',
            ],
            [
                'p' => 'Vacant units, units for sale and units whose owners travel can leak for days unnoticed. If water is coming from a unit that nobody answers, contact building management right away. Most HOAs have emergency access rights to stop damage to other units and common areas. Shutting off water to that unit or stack quickly limits how far the damage spreads.',
            ],
            [
                'h2' => 'Rebuilding After a Unit-to-Unit Leak',
            ],
            [
                'p' => 'Once every affected unit is dry, repairs begin. In multi-unit buildings, rebuild work often needs to match existing finishes, follow HOA rules on working hours and materials, and be coordinated so units above and below are not disturbed more than necessary. Clear scopes for each unit keep owners, tenants and the HOA on the same page.',
            ],
            [
                'h2' => 'More Condo Water Damage Questions',
            ],
            [
                'faq' => [
                    'q' => 'Do I need to tell my HOA about a leak inside my unit?',
                    'a' => [
                        'Yes, especially if it could affect other units or common areas. Report it in writing with photos so there is a clear record.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Can drying equipment run in an occupied unit?',
                    'a' => [
                        'Usually yes. Equipment is noisy and adds some warmth, but most residents stay home during drying unless sewage or extensive demolition is involved.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'What if my unit is affected but I am not home?',
                    'a' => [
                        'Give the HOA or property manager a way to reach you and permission for access if needed. Fast access means faster drying and less damage.',
                    ],
                ],
            ],
            [
                'h2' => 'Call About Condo Water Damage in San Bruno',
            ],
            [
                'p' => 'For condo water damage in San Bruno and help with apartment water damage in San Bruno, CA, call (650) 822-6798. A crew is dispatched immediately.',
            ],
        ],
        'eyebrow' => 'CONDO WATER DAMAGE • SAN BRUNO, CALIFORNIA',
    ],
    '/commercial-water-damage' => [
        'type' => 'service',
        'kind' => 'service',
        'h1' => '24/7 Commercial Water Damage Restoration in San Bruno',
        'meta' => [
            'title' => 'Commercial Water Damage San Bruno | 24/7 Business Flood Cleanup',
            'description' => 'Commercial water damage restoration in San Bruno, CA 94066 for offices, shops, restaurants and hotels. After-hours crews. Call (650) 822-6798.',
        ],
        'blocks' => [
            [
                'p' => 'When water hits a business, the damage is not just to floors and walls. It is lost sales, closed doors and unhappy customers. Our commercial water damage San Bruno crews work around your hours, dry your space in sections, and keep detailed records so you can reopen as soon as possible. Call any time and a crew is dispatched immediately.',
            ],
            [
                'h2' => 'How do San Bruno businesses keep operating after a water loss?',
            ],
            [
                'p' => 'By containing the wet area, drying in sections, scheduling work after hours, and keeping clear moisture records, many San Bruno businesses stay partly open during restoration.',
            ],
            [
                'p' => 'A water loss does not have to mean closing for a week. When the crew arrives, the first goal is to stop the water and protect the parts of the space that are still dry. Wet areas are sectioned off with plastic containment, drying equipment is placed where it will not block customers, and noisy or disruptive work is scheduled overnight or on weekends. Many offices, shops and restaurants keep serving customers while drying happens behind the scenes.',
            ],
            [
                'h2' => 'Types of Commercial Properties We Serve',
            ],
            [
                'ul' => [
                    'Retail shops along San Mateo Avenue and in downtown San Bruno',
                    'Restaurants and cafes along El Camino Real and San Bruno Avenue',
                    'Offices at Bayhill and around the city',
                    'Stores and businesses near Tanforan and the San Bruno BART station',
                    'Hotels and airport-area businesses near SFO',
                    'Medical and dental offices',
                    'Warehouses and light industrial spaces',
                    'Apartment buildings and multi-unit properties',
                    'Schools, churches and community buildings',
                ],
            ],
            [
                'h2' => 'Common Causes of Business Flood Cleanup in San Bruno, CA',
            ],
            [
                'p' => 'Most calls for business flood cleanup in San Bruno, CA come from:',
            ],
            [
                'ul' => [
                    'Fire sprinkler line breaks',
                    'Burst pipes in ceilings and walls',
                    'Roof leaks during winter storms',
                    'Restaurant kitchen leaks from dishwashers, ice machines and floor drains',
                    'Restroom overflows and sewer backups',
                    'Water heater and boiler failures',
                    'Storm water entering storefronts and loading areas',
                    'HVAC condensate leaks above drop ceilings',
                ],
            ],
            [
                'h2' => 'Restaurant Water Damage',
            ],
            [
                'p' => [
                    'text' => 'Restaurant water damage needs special care. Kitchens have floor drains that back up, dishwashers and ice machines that leak, and grease that makes cleanup harder. Food safety rules also apply. The crew works to get kitchens cleaned, sanitized and dried quickly so you can pass inspection and reopen. Sewage backups in restaurants are treated as Category 3 water and handled with full protective gear. See sewage backup cleanup.',
                    'links' => [
                        [
                            'anchor' => 'sewage backup cleanup',
                            'href' => '/sewage-backup-cleanup',
                            'pos' => 427,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Our Commercial Water Damage Process',
            ],
            [
                'h3' => 'Emergency Response',
            ],
            [
                'p' => 'You call (650) 822-6798 and a crew is dispatched immediately with equipment sized for commercial spaces.',
            ],
            [
                'h3' => 'Assessment',
            ],
            [
                'p' => 'The crew stops the source, checks electrical and safety hazards, and maps moisture through floors, walls and ceilings.',
            ],
            [
                'h3' => 'Business Continuity Plan',
            ],
            [
                'p' => 'You get a clear plan for which areas need to close, which can stay open, and when work will happen.',
            ],
            [
                'h3' => 'Extraction',
            ],
            [
                'p' => 'Truck-mounted units remove water from large floor areas quickly.',
            ],
            [
                'h3' => 'Drying',
            ],
            [
                'p' => 'Commercial dehumidifiers and air movers dry the structure, with daily moisture readings.',
            ],
            [
                'h3' => 'Documentation',
            ],
            [
                'p' => 'Photos, moisture logs and equipment records are kept for your insurance claim and your records.',
            ],
            [
                'h3' => 'Repairs',
            ],
            [
                'p' => 'Drywall, ceiling tiles, flooring and finishes are restored.',
            ],
            [
                'h2' => 'Commercial Water Damage: Key Facts',
            ],
            [
                'p' => 'Here are the basics every business owner should know:',
            ],
            [
                'ul' => [
                    'Commercial water damage is any water loss in a business property, from a small leak to a full flood.',
                    'Most commercial property policies cover sudden water damage, but not flooding from outside water without separate coverage.',
                    'Business interruption coverage may help with lost income while you are closed. Check your policy.',
                    'Mold can start growing within 24 to 72 hours, so drying should start right away.',
                    'Drop ceilings, carpet tiles and drywall are the materials most often damaged.',
                    'Documenting damage before cleanup protects your claim.',
                ],
            ],
            [
                'h2' => 'Water Damage in Offices and Server Rooms',
            ],
            [
                'p' => 'Water near computers, servers and electrical equipment needs extra care. Power to affected areas is shut down, equipment is moved out of wet areas, and drying is planned so dust and humidity do not harm sensitive electronics.',
            ],
            [
                'h2' => 'Multi-Unit and Mixed-Use Buildings',
            ],
            [
                'p' => [
                    'text' => 'Mixed-use buildings with shops below and apartments above, and apartment complexes across San Bruno, need coordination between owners, tenants and property managers. See condo water damage.',
                    'links' => [
                        [
                            'anchor' => 'condo water damage',
                            'href' => '/condo-water-damage',
                            'pos' => 189,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Preventing Commercial Water Damage',
            ],
            [
                'ul' => [
                    'Have sprinkler systems inspected on schedule',
                    'Inspect roofs before the rainy season',
                    'Install leak sensors near water heaters, ice machines and restrooms',
                    'Train staff to find and use water shutoff valves',
                    'Keep floor drains clear, especially in kitchens',
                    'Keep stock and equipment off the floor in storage rooms',
                ],
            ],
            [
                'h2' => 'Commercial Water Damage FAQs',
            ],
            [
                'faq' => [
                    'q' => 'Can work be done after hours?',
                    'a' => [
                        'Yes. Extraction, removal and repairs can be scheduled overnight and on weekends to limit disruption.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Do you work with property managers?',
                    'a' => [
                        'Yes. The crew works with owners, tenants and property managers, and shares the same records with everyone.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'How long will my business be affected?',
                    'a' => [
                        'Small losses are often handled in a few days. Larger losses can take longer, but drying in sections usually lets part of the business stay open.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Do you handle large spaces?',
                    'a' => [
                        'Yes. Truck-mounted extraction and commercial drying equipment are used for large retail, office and warehouse spaces.',
                    ],
                ],
            ],
            [
                'h2' => 'Commercial Water Damage by Industry',
            ],
            [
                'h3' => 'Retail Stores',
            ],
            [
                'p' => 'Inventory on the floor and in back rooms is the first concern. Wet stock is moved and documented, and sales floors are dried in sections so the store can stay open.',
            ],
            [
                'h3' => 'Restaurants',
            ],
            [
                'p' => 'Kitchens need cleaning, sanitizing and drying to meet health standards. Walk-in coolers, floor drains and dish areas are common leak points.',
            ],
            [
                'h3' => 'Offices',
            ],
            [
                'p' => 'Carpet tiles, drop ceilings, cubicle walls and electronics are the main concerns. Work is often done overnight so staff can return in the morning.',
            ],
            [
                'h3' => 'Hotels',
            ],
            [
                'p' => 'Room-by-room moisture logs help managers return rooms to service as each one dries, instead of waiting for the whole floor.',
            ],
            [
                'h3' => 'Medical and Dental Offices',
            ],
            [
                'p' => 'Clean, controlled conditions matter. Containment and air filtration keep dust and moisture away from treatment areas.',
            ],
            [
                'h3' => 'Warehouses and Light Industrial',
            ],
            [
                'p' => 'Large floor areas, high ceilings and stored goods need high-capacity extraction and drying equipment.',
            ],
            [
                'h2' => 'Working With Your Insurance Adjuster',
            ],
            [
                'p' => 'Commercial claims move faster when the adjuster has clear information early. The crew helps by providing:',
            ],
            [
                'ul' => [
                    'Photos of the source and every affected area before work begins',
                    'Moisture maps and daily readings',
                    'Equipment logs showing what ran, where and for how long',
                    'Lists of removed materials and damaged contents',
                    'A written scope for repairs',
                ],
            ],
            [
                'p' => 'You stay in charge of the claim, and your adjuster makes coverage decisions, but complete records reduce back-and-forth.',
            ],
            [
                'h2' => 'Planning Ahead: A Water Emergency Plan for Your Business',
            ],
            [
                'p' => 'Every business should know who to call and what to do before water hits. Keep the main water shutoff location posted, train key staff on how to use it, store (650) 822-6798 in your emergency contacts, and keep a list of critical equipment that must be protected first.',
            ],
            [
                'h2' => 'Sprinkler Line Breaks',
            ],
            [
                'p' => 'Fire sprinkler systems hold water under pressure, and when a pipe or head breaks, water comes out fast and keeps coming until the system is shut down. Breaks happen from accidental impact, corrosion, or freezing in rare cold spots. The building\'s fire sprinkler contractor should handle shutting down and restoring the system. Once the water is off, extraction and drying begin right away, often across several rooms or floors at once.',
            ],
            [
                'h2' => 'Drop Ceilings and Carpet Tiles',
            ],
            [
                'p' => 'Offices often have suspended ceiling tiles and carpet tiles. Wet ceiling tiles usually sag and stain and are replaced. Carpet tiles can sometimes be lifted, cleaned and dried individually, which is faster than dealing with broadloom carpet. The space above the drop ceiling and under raised floors also needs to be checked for trapped moisture.',
            ],
            [
                'h2' => 'Getting Back to Business',
            ],
            [
                'p' => 'Once drying is complete, the focus shifts to repairs and reopening. Repairs can often be scheduled in phases, so finished areas return to use while others are still being worked on. Keeping customers, staff and tenants informed about which areas are open helps the transition go smoothly.',
            ],
            [
                'h2' => 'More Commercial Water Damage Questions',
            ],
            [
                'faq' => [
                    'q' => 'Can you work around our customers?',
                    'a' => [
                        'Yes. Wet areas are sectioned off and equipment is placed out of customer paths. Noisy work can be scheduled after hours.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Do you handle water damage in restaurant kitchens?',
                    'a' => [
                        'Yes. Kitchens are cleaned, sanitized and dried, with attention to floor drains, coolers and equipment.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'What if water reaches our inventory?',
                    'a' => [
                        'Wet inventory is moved to a dry area, photographed and documented for your claim before any decisions are made about it.',
                    ],
                ],
            ],
            [
                'h2' => 'Call for Commercial Water Damage Help in San Bruno',
            ],
            [
                'p' => 'For commercial water damage in San Bruno and fast business flood cleanup in San Bruno, CA, call (650) 822-6798. A crew is dispatched immediately, day or night.',
            ],
        ],
        'eyebrow' => 'COMMERCIAL WATER DAMAGE • SAN BRUNO, CALIFORNIA',
    ],
    '/hardwood-floor-water-damage' => [
        'type' => 'service',
        'kind' => 'service',
        'h1' => 'Emergency Hardwood Floor Water Damage Drying in San Bruno',
        'meta' => [
            'title' => 'Hardwood Floor Water Damage San Bruno | Wet Floor Drying 24/7',
            'description' => 'Hardwood floor water damage in San Bruno, CA 94066. Wet floors dried in place before they cup or buckle. Call (650) 822-6798 24/7.',
        ],
        'blocks' => [
            [
                'p' => 'Many San Bruno homes still have the original oak floors put in after the war. They are worth saving. Our hardwood floor water damage San Bruno crews pull water out of the boards with specialized drying mats before they cup, buckle or lift. Call now and a crew is dispatched immediately.',
            ],
            [
                'h2' => 'Can original oak floors in San Bruno\'s post-war homes be saved after a leak?',
            ],
            [
                'p' => 'Often, yes. Solid oak floors caught within a day or two of a clean-water leak can usually be dried in place with floor mats and dehumidifiers.',
            ],
            [
                'p' => 'Homes built in the 1940s and 1950s in neighborhoods like Mills Park, Huntington Park, San Bruno Park and Crestmoor were often finished with solid oak strip flooring. Solid hardwood is thick enough to be dried and refinished, unlike many modern engineered or laminate floors. The key is speed: the longer wood sits wet, the more it swells, cups and separates from the subfloor.',
            ],
            [
                'h2' => 'Signs of Hardwood Floor Water Damage',
            ],
            [
                'ul' => [
                    'Cupping hardwood floors, where board edges rise higher than the centers',
                    'Crowning, where centers rise higher than edges (often from sanding a cupped floor too soon)',
                    'Buckling, where boards lift off the subfloor',
                    'Dark stains or gray discoloration',
                    'Gaps between boards after drying',
                    'Soft or spongy spots',
                    'A musty smell from the floor',
                ],
            ],
            [
                'h2' => 'How Wet Hardwood Floor Drying Works in San Bruno, CA',
            ],
            [
                'p' => 'Wet hardwood floor drying in San Bruno, CA uses a few specialized tools:',
            ],
            [
                'h3' => 'Floor Drying Mats',
            ],
            [
                'p' => 'Panels are sealed to the floor surface and connected to a vacuum system. They pull moisture up through the boards and out of the wood.',
            ],
            [
                'h3' => 'Dehumidifiers',
            ],
            [
                'p' => 'Low-grain dehumidifiers dry the air above the floor so the wood can release moisture.',
            ],
            [
                'h3' => 'Subfloor Drying',
            ],
            [
                'p' => [
                    'text' => 'In raised homes, drying equipment is placed in the crawl space to dry the subfloor from below. See crawl space water damage.',
                    'links' => [
                        [
                            'anchor' => 'crawl space water damage',
                            'href' => '/crawl-space-water-damage',
                            'pos' => 124,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Moisture Readings',
            ],
            [
                'p' => 'Pin and pinless meters measure moisture in the boards and subfloor each day, compared to dry areas of the same floor.',
            ],
            [
                'h2' => 'Why Fast Action Matters for Hardwood',
            ],
            [
                'p' => 'Wood absorbs water through its edges and bottom first. Within hours, boards start to swell. Within a day or two, cupping begins. If drying starts early, many floors return close to flat as they dry. If they sit wet for a week, they may need to be replaced, and mold may start underneath.',
            ],
            [
                'h2' => 'What Can and Cannot Be Saved',
            ],
            [
                'h3' => 'Usually Saved',
            ],
            [
                'p' => 'Solid hardwood soaked with clean water and dried quickly. Minor cupping often settles as the floor dries.',
            ],
            [
                'h3' => 'Sometimes Saved',
            ],
            [
                'p' => 'Engineered hardwood, depending on its thickness and core. Floors with moderate cupping may need sanding and refinishing after drying.',
            ],
            [
                'h3' => 'Usually Replaced',
            ],
            [
                'p' => 'Floors soaked by sewage or floodwater. Laminate with swollen cores. Boards that have split, buckled badly or grown mold.',
            ],
            [
                'h2' => 'Don\'t Sand Too Soon',
            ],
            [
                'p' => 'A common mistake is sanding a cupped floor before it is fully dry. As the wood keeps drying, the edges shrink and the centers end up higher, which is called crowning. Wait until moisture readings match normal levels before refinishing.',
            ],
            [
                'h2' => 'Sources of Hardwood Floor Damage in San Bruno Homes',
            ],
            [
                'ul' => [
                    [
                        'text' => 'Burst pipes and supply lines. See burst pipe water damage.',
                        'links' => [
                            [
                                'anchor' => 'burst pipe water damage',
                                'href' => '/burst-pipe-water-damage',
                                'pos' => 58,
                            ],
                        ],
                    ],
                    'Dishwasher and refrigerator leaks in kitchens',
                    [
                        'text' => 'Slab or hidden leaks under the floor. See slab leak water damage.',
                        'links' => [
                            [
                                'anchor' => 'slab leak water damage',
                                'href' => '/slab-leak-hidden-leak-water-damage',
                                'pos' => 65,
                            ],
                        ],
                    ],
                    'Crawl space moisture rising into the subfloor',
                    'Pet accidents and plant overwatering over time',
                    'Storm water entering through doors',
                ],
            ],
            [
                'h2' => 'Protecting Hardwood Floors',
            ],
            [
                'ul' => [
                    'Use mats at entry doors during the rainy season',
                    'Put trays under plants and pet water bowls',
                    'Keep indoor humidity between 35 and 55 percent',
                    'Check the crawl space after heavy storms',
                    'Wipe up spills right away',
                    'Install leak sensors near the dishwasher and refrigerator',
                ],
            ],
            [
                'h2' => 'Hardwood Floor FAQs',
            ],
            [
                'faq' => [
                    'q' => 'How long does it take to dry a hardwood floor?',
                    'a' => [
                        'Usually three to seven days, depending on how wet it got, the type of wood and whether the subfloor is also wet.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Will my floor go back to flat?',
                    'a' => [
                        'Minor cupping often flattens out as the wood dries. Heavier cupping may need sanding and refinishing once the floor is fully dry.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Can engineered hardwood be dried?',
                    'a' => [
                        'Sometimes. Thicker engineered floors with plywood cores dry better than thin ones with fiberboard cores.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Does insurance cover water-damaged hardwood?',
                    'a' => [
                        'Sudden water damage is often covered. Damage from long-term leaks is often excluded. Check your policy.',
                    ],
                ],
            ],
            [
                'h2' => 'Types of Wood Floors in San Bruno Homes',
            ],
            [
                'h3' => 'Solid Oak Strip Flooring',
            ],
            [
                'p' => 'The most common original floor in post-war San Bruno homes. Narrow boards, usually three-quarters of an inch thick, nailed to a wood subfloor. Solid oak is the most forgiving after water damage because it can be dried and sanded several times over its life.',
            ],
            [
                'h3' => 'Engineered Hardwood',
            ],
            [
                'p' => 'A real wood top layer glued to a plywood or fiberboard core. Common in remodels. Thicker products with plywood cores can often be dried; thin products with fiberboard cores often swell and must be replaced.',
            ],
            [
                'h3' => 'Laminate and Luxury Vinyl Plank',
            ],
            [
                'p' => 'Not real wood, but often installed in place of it. Laminate has a fiberboard core that swells when wet and usually cannot be saved. Vinyl plank resists water on top, but water underneath it can be trapped against the subfloor and must be dried.',
            ],
            [
                'h2' => 'Refinishing After Water Damage',
            ],
            [
                'p' => 'Once a solid hardwood floor is fully dry, minor cupping often settles on its own. Remaining unevenness can be sanded flat and refinished. A few tips:',
            ],
            [
                'ul' => [
                    'Wait until moisture readings match dry areas of the same floor before sanding',
                    'Give the floor time to acclimate after drying, usually a couple of weeks',
                    'Expect some color difference if only part of the floor is refinished; many owners refinish the whole room for an even look',
                    'Replace only the boards that split, buckled badly or grew mold',
                ],
            ],
            [
                'h2' => 'Hardwood Over Crawl Spaces vs Slabs',
            ],
            [
                'p' => 'In raised homes, hardwood sits on a wood subfloor over a crawl space. Water can be dried from both above, with floor mats, and below, with equipment in the crawl space. This often makes raised floors easier to save. In homes on concrete slabs, hardwood is usually glued or nailed to a wood layer on top of the slab, and water trapped between the wood and the concrete is harder to reach. Slab homes may need some boards lifted to dry properly.',
            ],
            [
                'h2' => 'Why Some Floors Gap After Drying',
            ],
            [
                'p' => 'As boards dry, they shrink back. Floors that were very wet can end up with small gaps between boards, especially in winter when indoor air is drier. Many gaps close again as seasons change. Large or permanent gaps can be filled or the affected boards replaced during refinishing.',
            ],
            [
                'h2' => 'Hardwood Under Rugs and Furniture',
            ],
            [
                'p' => 'Rugs and heavy furniture slow drying. Water trapped under a rug keeps the boards below wet long after the rest of the floor looks dry, and the rug itself can stain the wood. After a leak, lift rugs and move furniture off wet areas as soon as you can. Put foil or blocks under furniture legs you cannot move so they do not leave rust or stain marks on wet wood.',
            ],
            [
                'h2' => 'Hardwood Floors in Kitchens and Bathrooms',
            ],
            [
                'p' => 'Kitchens and bathrooms see more water than any other rooms, from dishwashers, sinks, refrigerators, toilets and showers. Hardwood in these rooms is especially vulnerable to slow leaks that soak the edges of boards under cabinets and around fixtures. Check these areas regularly for dark spots, raised edges and soft boards, and fix leaks right away.',
            ],
            [
                'h2' => 'Matching Boards During Repairs',
            ],
            [
                'p' => 'When some boards must be replaced, matching old oak can be tricky. Species, width, thickness and color all have to line up. Sometimes boards from a closet or under built-in cabinets are used to patch the main floor, and new wood goes in the hidden spot. A full sanding and refinish of the room usually blends old and new boards together.',
            ],
            [
                'h2' => 'Engineered Floors Over Radiant Heat',
            ],
            [
                'p' => 'Some remodeled homes have engineered wood over radiant floor heating. Leaks in these systems need careful drying, and the heating should not be used to speed drying unless the flooring manufacturer and installer agree it is safe.',
            ],
            [
                'h2' => 'When to Call About a Wet Floor',
            ],
            [
                'p' => 'Call right away if water has been on hardwood for more than an hour, if boards have started to cup or lift, if the water came from a dishwasher or refrigerator that may have been leaking for a while, or if the floor sits over a crawl space that may also be wet. The sooner drying mats go down, the better the chance of saving the original floor.',
            ],
            [
                'h2' => 'Call About Hardwood Floor Water Damage in San Bruno',
            ],
            [
                'p' => 'For fast hardwood floor water damage help in San Bruno and wet hardwood floor drying in San Bruno, CA, call (650) 822-6798. A crew is dispatched immediately.',
            ],
        ],
        'eyebrow' => 'HARDWOOD FLOOR WATER DAMAGE • SAN BRUNO, CALIFORNIA',
    ],
    '/south-san-francisco-ca' => [
        'type' => 'area',
        'kind' => 'area',
        'h1' => '24/7 Water Damage Restoration in South San Francisco, CA 94080',
        'meta' => [
            'title' => '24/7 Water Damage Restoration South San Francisco, CA 94080',
            'description' => 'Water damage restoration in South San Francisco, CA 94080. Floods, pipes, sewage and mold, 24/7. Call (650) 822-6798 for help now.',
        ],
        'blocks' => [
            [
                'p' => 'Burst pipes in Westborough, storm water in a Sunshine Gardens garage, a sewer backup in an older home near Grand Avenue, a sprinkler break in an office east of 101. Our water damage restoration South San Francisco crews handle extraction, drying, sewage cleanup, mold and repairs across 94080. Call now and a crew is dispatched immediately.',
            ],
            [
                'h2' => 'What causes the most water damage in South San Francisco homes?',
            ],
            [
                'p' => 'Aging pipes in post-war homes, sewer lateral backups, storm runoff on hillside streets, and creek-related flooding in low areas near Colma Creek cause most South San Francisco water damage calls.',
            ],
            [
                'p' => 'South San Francisco is a city of contrasts. West of El Camino Real, neighborhoods like Westborough, Serra Highlands and Avalon Park climb into the hills, with mid-century homes on sloped lots. Between El Camino and 101, older neighborhoods around Grand Avenue, Sunshine Gardens and Mission Road sit on flatter ground, closer to the creek. East of 101, the city turns into one of the Bay Area\'s biggest commercial and research districts. Each part of the city has its own water damage patterns, and knowing them helps the crew find moisture faster.',
            ],
            [
                'h2' => 'South San Francisco Neighborhoods and Their Water Damage Risks',
            ],
            [
                'h3' => 'Westborough and Serra Highlands',
            ],
            [
                'p' => 'These hillside neighborhoods west of I-280 and along Skyline Boulevard are known for late-1950s ranch homes on sloped lots. Fog rolls in often from the ocean side, and many homes sit over crawl spaces. Common calls: crawl space water after storms, burst galvanized pipes, and mold in closets and bathrooms on cold exterior walls.',
            ],
            [
                'h3' => 'Sunshine Gardens, Buri Buri and Winston Manor',
            ],
            [
                'p' => 'Well-established neighborhoods with homes from the 1940s through the 1960s. Water damage here usually comes from older plumbing, slab and hidden leaks, failing water heaters in garages, and sewer laterals that roots have worked into over the decades.',
            ],
            [
                'h3' => 'Downtown and Grand Avenue',
            ],
            [
                'p' => 'The historic downtown core around Grand Avenue has some of the city\'s oldest buildings, including mixed-use properties with shops below and apartments above. Sewer backups, old supply lines and unit-to-unit leaks are the main concerns.',
            ],
            [
                'h3' => 'Paradise Valley and Sign Hill Area',
            ],
            [
                'p' => 'Homes on and below Sign Hill deal with runoff coming down steep streets during storms. Garages and lower-level rooms on the downhill side take the water.',
            ],
            [
                'h3' => 'Avalon Park and Country Club Park',
            ],
            [
                'p' => 'Mixed housing on rolling terrain. Roof leaks during wind-driven storms and crawl space moisture are common.',
            ],
            [
                'h3' => 'Areas Near Colma Creek',
            ],
            [
                'p' => 'Colma Creek runs through the middle of the city to the Bay. Low streets near the creek channel can see standing water and drain backups during heavy rain, especially when storms line up with high tides.',
            ],
            [
                'h3' => 'East of 101: Commercial and Research Districts',
            ],
            [
                'p' => 'The area around Oyster Point and the business parks east of 101 is packed with offices, labs, warehouses and hotels. Sprinkler breaks, roof leaks and restroom overflows in large buildings need fast, large-scale drying.',
            ],
            [
                'h2' => 'Water Damage Restoration Services in South San Francisco',
            ],
            [
                'p' => 'Every service is available across 94080, for homes, condos and businesses.',
            ],
            [
                'h3' => 'Emergency Water Extraction in South San Francisco',
            ],
            [
                'p' => [
                    'text' => 'Truck-mounted and portable pumps pull standing water out of floors, carpet, garages and crawl spaces so drying can start the same visit. Details on emergency water extraction.',
                    'links' => [
                        [
                            'anchor' => 'emergency water extraction',
                            'href' => '/emergency-water-extraction',
                            'pos' => 175,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Structural Drying in South San Francisco',
            ],
            [
                'p' => [
                    'text' => 'Air movers and dehumidifiers dry walls, subfloors and framing, with daily moisture readings. The foggy climate west of El Camino makes dehumidification especially important. See structural drying.',
                    'links' => [
                        [
                            'anchor' => 'structural drying',
                            'href' => '/structural-drying',
                            'pos' => 196,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Burst Pipe Cleanup in South San Francisco',
            ],
            [
                'p' => [
                    'text' => 'Old galvanized lines in post-war homes split without warning. The crew extracts, dries and repairs. See burst pipe water damage.',
                    'links' => [
                        [
                            'anchor' => 'burst pipe water damage',
                            'href' => '/burst-pipe-water-damage',
                            'pos' => 128,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Sewage Backup Cleanup in South San Francisco',
            ],
            [
                'p' => [
                    'text' => 'Root-blocked and cracked laterals in older neighborhoods send sewage back into homes. Category 3 cleanup with full protective gear and disinfection. See sewage backup cleanup.',
                    'links' => [
                        [
                            'anchor' => 'sewage backup cleanup',
                            'href' => '/sewage-backup-cleanup',
                            'pos' => 175,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Crawl Space Water Damage in South San Francisco',
            ],
            [
                'p' => [
                    'text' => 'Raised homes in Westborough and the hills collect water underneath after heavy rain. See crawl space water damage.',
                    'links' => [
                        [
                            'anchor' => 'crawl space water damage',
                            'href' => '/crawl-space-water-damage',
                            'pos' => 114,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Storm and Flood Cleanup in South San Francisco',
            ],
            [
                'p' => [
                    'text' => 'Flood cleanup South San Francisco homeowners need most often follows winter storms: water entering garages, low rooms and storefronts. See storm and flood damage.',
                    'links' => [
                        [
                            'anchor' => 'storm and flood damage',
                            'href' => '/storm-flood-water-damage',
                            'pos' => 162,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Flooded Garage and In-Law Unit Cleanup in South San Francisco',
            ],
            [
                'p' => [
                    'text' => 'Downhill garages and converted units below street level take on runoff from steep streets. See flooded garage cleanup.',
                    'links' => [
                        [
                            'anchor' => 'flooded garage cleanup',
                            'href' => '/garage-in-law-unit-flooding',
                            'pos' => 118,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Roof Leak and Ceiling Water Damage in South San Francisco',
            ],
            [
                'p' => [
                    'text' => 'Wind-driven rain finds gaps in older roofs and stains ceilings. See ceiling water damage.',
                    'links' => [
                        [
                            'anchor' => 'ceiling water damage',
                            'href' => '/roof-leak-ceiling-water-damage',
                            'pos' => 89,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Slab Leak and Hidden Leak Water Damage in South San Francisco',
            ],
            [
                'p' => [
                    'text' => 'Warm floors, rising water bills and musty smells point to leaks under slabs and inside walls. See slab leak water damage.',
                    'links' => [
                        [
                            'anchor' => 'slab leak water damage',
                            'href' => '/slab-leak-hidden-leak-water-damage',
                            'pos' => 121,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Water Heater and Appliance Leaks in South San Francisco',
            ],
            [
                'p' => [
                    'text' => 'Failed water heaters, washing machine hoses and dishwasher leaks. See water heater leak cleanup.',
                    'links' => [
                        [
                            'anchor' => 'water heater leak cleanup',
                            'href' => '/water-heater-appliance-leak',
                            'pos' => 96,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Mold Remediation in South San Francisco',
            ],
            [
                'p' => [
                    'text' => 'Containment, removal and moisture control for homes where fog and leaks combine. See mold remediation.',
                    'links' => [
                        [
                            'anchor' => 'mold remediation',
                            'href' => '/mold-remediation',
                            'pos' => 102,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Condo and Apartment Water Damage in South San Francisco',
            ],
            [
                'p' => [
                    'text' => 'Unit-to-unit leaks in condos and apartment buildings, with records for owners, tenants and HOAs. See condo water damage.',
                    'links' => [
                        [
                            'anchor' => 'condo water damage',
                            'href' => '/condo-water-damage',
                            'pos' => 120,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Commercial Water Damage in South San Francisco',
            ],
            [
                'p' => [
                    'text' => 'Offices, labs, warehouses, hotels and restaurants, with after-hours work and drying in sections. See commercial water damage.',
                    'links' => [
                        [
                            'anchor' => 'commercial water damage',
                            'href' => '/commercial-water-damage',
                            'pos' => 125,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Hardwood Floor Drying in South San Francisco',
            ],
            [
                'p' => [
                    'text' => 'Original oak floors in older homes dried in place with specialized mats. See hardwood floor water damage.',
                    'links' => [
                        [
                            'anchor' => 'hardwood floor water damage',
                            'href' => '/hardwood-floor-water-damage',
                            'pos' => 105,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Commercial Water Damage East of 101',
            ],
            [
                'p' => 'The commercial district east of 101 is one of the busiest business areas on the Peninsula. Water losses here are often large: a sprinkler line breaking above a lab, a roof leak over a warehouse, or a restroom overflow on an upper office floor. Commercial water damage repair South San Francisco CA businesses need starts with protecting equipment and inventory, sectioning off wet areas, and drying fast enough to limit downtime. The crew can work overnight, coordinate with property managers and facility teams, and keep detailed moisture and equipment logs for insurance and compliance.',
            ],
            [
                'p' => 'Sensitive spaces like labs, server rooms and clean rooms need extra care. Power to wet areas is shut down, equipment is moved or protected, and drying is planned to control dust and humidity.',
            ],
            [
                'h2' => 'Colma Creek Flooding and Winter Storms',
            ],
            [
                'p' => 'Colma Creek collects runoff from a large part of the city and from the hills to the west. During long winter storms, the creek channel rises fast. When high tides in the Bay slow its flow, Colma Creek flooding can back water into storm drains and low streets nearby. Homes and businesses close to the creek, and along low parts of the flats, are most at risk.',
            ],
            [
                'p' => 'Before storm season:',
            ],
            [
                'ul' => [
                    'Clear the storm drain in front of your property and keep gutters flowing.',
                    'Move belongings off garage floors.',
                    'Know where your main water shutoff and electrical panel are.',
                    'Sign up for San Mateo County emergency alerts.',
                ],
            ],
            [
                'p' => 'If water does get in, call right away. Storm water from outside is treated as contaminated, so porous materials it touched usually need to be removed, and everything else is cleaned and disinfected before drying.',
            ],
            [
                'h2' => 'Fog, Hills and Slow Drying',
            ],
            [
                'p' => 'Neighborhoods west of El Camino, especially Westborough, sit in the fog belt. The air is cool and damp much of the year. That means a wet wall or subfloor does not dry by itself, and mold can start sooner. Proper drying here relies on dehumidifiers and daily readings, not open windows. Homes on the sunny, eastern side of the city still benefit from the same measured approach, since hidden moisture behind walls and under floors behaves the same way.',
            ],
            [
                'h2' => 'What to Do in the First Hour',
            ],
            [
                'p' => 'Shut off the main water valve if the source is a pipe or fixture.',
            ],
            [
                'p' => 'Turn off power to wet rooms if you can reach the panel safely.',
            ],
            [
                'p' => 'Move valuables, documents and electronics to a dry place.',
            ],
            [
                'p' => 'Take photos and video before anything is moved.',
            ],
            [
                'p' => 'Keep children and pets away from sewage and floodwater.',
            ],
            [
                'p' => 'Call (650) 822-6798.',
            ],
            [
                'h2' => 'How Much Does Water Damage Repair in South San Francisco Cost?',
            ],
            [
                'p' => [
                    'text' => 'Water damage repair South San Francisco CA homeowners pay for depends on the size of the wet area, the type of water, how long drying takes, and what needs to be rebuilt. Clean water from a supply line caught early costs far less than sewage or floodwater that soaked through drywall and flooring. You get a written scope before major work begins. For typical ranges and the factors behind them, see the water damage cost guide.',
                    'links' => [
                        [
                            'anchor' => 'water damage cost guide',
                            'href' => '/resources/water-damage-restoration-cost-san-bruno',
                            'pos' => 428,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Insurance and Documentation',
            ],
            [
                'p' => 'Most homeowners and commercial policies cover sudden water damage like a burst pipe. Outside flooding usually needs separate flood coverage, and sewer backups often need a specific endorsement. Every policy is different. The crew records photos, moisture readings, removed materials and the full scope of work so you have clear documentation to share with your adjuster.',
            ],
            [
                'h2' => 'Frequently Asked Questions About Water Damage in South San Francisco',
            ],
            [
                'faq' => [
                    'q' => 'How fast can a crew reach my home in South San Francisco?',
                    'a' => [
                        'A crew is dispatched immediately after you call (650) 822-6798, at any hour. South San Francisco borders San Bruno, so crews are close by.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Do you serve businesses east of 101?',
                    'a' => [
                        'Yes. Offices, labs, warehouses, hotels and restaurants across the commercial district are covered, with after-hours scheduling.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Do you handle sewage backups in older South San Francisco homes?',
                    'a' => [
                        'Yes. Sewage is cleaned up as Category 3 water, with protective gear, removal of contaminated materials and disinfection.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Can mold start quickly in South San Francisco homes?',
                    'a' => [
                        'Yes. In foggy neighborhoods like Westborough, mold can start within 24 to 72 hours on wet drywall and wood, so drying should begin right away.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'What ZIP codes do you cover?',
                    'a' => [
                        'All of South San Francisco, including 94080, plus neighboring San Bruno, Millbrae, Pacifica, Burlingame and Brisbane.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Do you work with condo HOAs and property managers?',
                    'a' => [
                        'Yes. The crew coordinates with owners, tenants, HOAs and property managers and shares the same records with everyone.',
                    ],
                ],
            ],
            [
                'h2' => 'Nearby Areas We Also Serve',
            ],
            [
                'p' => [
                    'text' => 'If you live near the South San Francisco border, the same crews cover San Bruno, Brisbane, Pacifica and Millbrae.',
                    'links' => [
                        [
                            'anchor' => 'San Bruno',
                            'href' => '/',
                            'pos' => 80,
                        ],
                        [
                            'anchor' => 'Brisbane',
                            'href' => '/brisbane-ca',
                            'pos' => 135,
                        ],
                        [
                            'anchor' => 'Pacifica',
                            'href' => '/pacifica-ca',
                            'pos' => 202,
                        ],
                        [
                            'anchor' => 'Millbrae',
                            'href' => '/millbrae-ca',
                            'pos' => 272,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Apartments and Condos in South San Francisco',
            ],
            [
                'p' => 'South San Francisco has a growing number of apartment and condo buildings, from newer complexes near the BART and Caltrain stations to older buildings near downtown and along El Camino Real. In these buildings, a leak in one unit often shows up in the unit below or next door. The crew checks every unit that may be affected, dries each one, and keeps separate records for owners, tenants, HOAs and property managers. Responsibility usually follows the source of the leak and the building\'s governing documents.',
            ],
            [
                'h2' => 'Older Sewer Laterals in South San Francisco Homes',
            ],
            [
                'p' => 'Many South San Francisco homes were built in the decades after World War II, and their sewer laterals are now 60 or more years old. Clay and cast iron laterals crack, sag and let roots in, especially under mature trees. The result is slow drains, gurgling toilets and, eventually, sewage coming up through the lowest drain in the house. If you notice those warning signs, have the line inspected with a camera before it backs up. If sewage has already come into the home, it needs Category 3 cleanup with full protective gear and disinfection.',
            ],
            [
                'h2' => 'Call for Water Damage Restoration in South San Francisco Now',
            ],
            [
                'p' => 'Water spreads further every hour it sits. For water damage restoration in South San Francisco, from a single leak to a whole-floor flood, call (650) 822-6798. A crew is dispatched immediately anywhere in 94080.',
            ],
        ],
        'eyebrow' => 'WATER DAMAGE RESTORATION • SOUTH SAN FRANCISCO, CALIFORNIA',
    ],
    '/millbrae-ca' => [
        'type' => 'area',
        'kind' => 'area',
        'h1' => 'Emergency Water Damage Restoration in Millbrae, CA 94030',
        'meta' => [
            'title' => 'Emergency Water Damage Restoration Millbrae, CA 94030 | 24/7',
            'description' => 'Emergency water damage restoration in Millbrae, CA 94030. Leaks, floods, sewage and mold. Call (650) 822-6798 and get help now.',
        ],
        'blocks' => [
            [
                'p' => 'A supply line bursts in a Millbrae Highlands kitchen. Runoff floods a downhill garage off Magnolia Avenue. Water from the unit above soaks a condo ceiling near the station. Our water damage restoration Millbrae crews handle extraction, drying, sewage cleanup, mold and repairs anywhere in 94030. Call now and a crew is dispatched immediately.',
            ],
            [
                'h2' => 'What should Millbrae homeowners do first when water damage hits?',
            ],
            [
                'p' => 'Shut off the main water valve, cut power to wet rooms if safe, move valuables, photograph the damage, then call (650) 822-6798 so extraction and drying start right away.',
            ],
            [
                'p' => 'Millbrae is compact, but it is not flat. The city rises from the Bayside flats near SFO and El Camino Real up through steep hillside neighborhoods toward I-280. That slope shapes almost every water damage call here. Uphill homes deal with crawl spaces, roof leaks and fog. Downhill homes and lower-level rooms catch storm runoff. Older homes near Broadway and the downtown core deal with aging pipes and sewer laterals. And the growing number of condos and apartments around Millbrae Station bring unit-to-unit leaks into the mix.',
            ],
            [
                'h2' => 'Water Damage by Home Type in Millbrae',
            ],
            [
                'h3' => 'Hillside Ranches in Millbrae Highlands, Mills Estate and Green Hills',
            ],
            [
                'p' => 'Many homes in the western hills were built in the 1950s and 1960s on sloped lots, often over crawl spaces and with garages tucked below the main floor. After heavy rain, water runs downhill under the house or into the garage. Fog drifting over from the coast keeps these homes damp, so drying takes longer and mold can start sooner.',
            ],
            [
                'p' => 'What the crew sees most often:',
            ],
            [
                'ul' => [
                    'Water pooling in crawl spaces after storms',
                    'Flooded garages and lower-level bonus rooms',
                    'Roof leaks during wind-driven rain',
                    'Burst galvanized pipes in original plumbing',
                ],
            ],
            [
                'h3' => 'Older Homes Near Broadway, Downtown and Marino Vista Park',
            ],
            [
                'p' => 'Closer to El Camino and the downtown blocks along Broadway, homes are older and flatter, with original oak floors and decades-old sewer laterals. Root intrusion into laterals is a leading cause of sewage backups here, and hidden leaks under floors often go unnoticed until boards start to cup.',
            ],
            [
                'p' => 'What the crew sees most often:',
            ],
            [
                'ul' => [
                    'Sewer backups through floor drains and ground-floor toilets',
                    'Slab and hidden leaks under hardwood',
                    'Water heater failures in garages',
                    'Ceiling stains from bathrooms above',
                ],
            ],
            [
                'h3' => 'Condos and Apartments Near Millbrae Station',
            ],
            [
                'p' => 'The area around Millbrae Station, where BART and Caltrain meet, has seen new multi-unit buildings alongside older apartment complexes. Leaks in these buildings rarely stay in one unit. Water travels through ceilings, shared walls and pipe chases, so several units may need drying at once.',
            ],
            [
                'p' => 'What the crew sees most often:',
            ],
            [
                'ul' => [
                    'Unit-to-unit leaks from washers, dishwashers and toilets',
                    'Water heater closets leaking into hallways and units below',
                    'Sprinkler and pipe failures in common areas',
                ],
            ],
            [
                'h3' => 'Businesses Along El Camino Real, Broadway and Millbrae Avenue',
            ],
            [
                'p' => 'Restaurants, shops, offices and hotels close to SFO need water damage handled without long closures. The crew dries in sections and schedules work after hours when needed.',
            ],
            [
                'h2' => 'Our Water Damage Restoration Services in Millbrae',
            ],
            [
                'p' => 'Every water damage service is available across Millbrae 94030.',
            ],
            [
                'p' => [
                    'text' => 'Emergency water extraction in Millbrae: standing water removed from floors, carpet, garages and crawl spaces.',
                    'links' => [
                        [
                            'anchor' => 'Emergency water extraction',
                            'href' => '/emergency-water-extraction',
                            'pos' => 39,
                        ],
                    ],
                ],
            ],
            [
                'p' => [
                    'text' => 'Structural drying in Millbrae: air movers, dehumidifiers and daily moisture readings.',
                    'links' => [
                        [
                            'anchor' => 'Structural drying',
                            'href' => '/structural-drying',
                            'pos' => 30,
                        ],
                    ],
                ],
            ],
            [
                'p' => [
                    'text' => 'Burst pipe cleanup in Millbrae: fast extraction and drying after a supply line fails.',
                    'links' => [
                        [
                            'anchor' => 'Burst pipe cleanup',
                            'href' => '/burst-pipe-water-damage',
                            'pos' => 31,
                        ],
                    ],
                ],
            ],
            [
                'p' => [
                    'text' => 'Sewage backup cleanup in Millbrae: Category 3 cleanup and disinfection.',
                    'links' => [
                        [
                            'anchor' => 'Sewage backup cleanup',
                            'href' => '/sewage-backup-cleanup',
                            'pos' => 34,
                        ],
                    ],
                ],
            ],
            [
                'p' => [
                    'text' => 'Crawl space water damage in Millbrae: pump-out and drying under raised hillside homes.',
                    'links' => [
                        [
                            'anchor' => 'Crawl space water damage',
                            'href' => '/crawl-space-water-damage',
                            'pos' => 37,
                        ],
                    ],
                ],
            ],
            [
                'p' => [
                    'text' => 'Storm and flood damage in Millbrae: runoff and street water cleanup.',
                    'links' => [
                        [
                            'anchor' => 'Storm and flood damage',
                            'href' => '/storm-flood-water-damage',
                            'pos' => 35,
                        ],
                    ],
                ],
            ],
            [
                'p' => [
                    'text' => 'Flooded garage and in-law unit cleanup in Millbrae: downhill garages and lower-level units.',
                    'links' => [
                        [
                            'anchor' => 'Flooded garage and in-law unit',
                            'href' => '/garage-in-law-unit-flooding',
                            'pos' => 51,
                        ],
                    ],
                ],
            ],
            [
                'p' => [
                    'text' => 'Ceiling and roof leak damage in Millbrae: wet ceilings, attics and insulation.',
                    'links' => [
                        [
                            'anchor' => 'Ceiling and roof leak damage',
                            'href' => '/roof-leak-ceiling-water-damage',
                            'pos' => 41,
                        ],
                    ],
                ],
            ],
            [
                'p' => [
                    'text' => 'Slab and hidden leak damage in Millbrae: leaks under floors and inside walls.',
                    'links' => [
                        [
                            'anchor' => 'Slab and hidden leak damage',
                            'href' => '/slab-leak-hidden-leak-water-damage',
                            'pos' => 40,
                        ],
                    ],
                ],
            ],
            [
                'p' => [
                    'text' => 'Water heater and appliance leaks in Millbrae: tanks, washers, dishwashers and fridges.',
                    'links' => [
                        [
                            'anchor' => 'Water heater and appliance leaks',
                            'href' => '/water-heater-appliance-leak',
                            'pos' => 45,
                        ],
                    ],
                ],
            ],
            [
                'p' => [
                    'text' => 'Mold remediation in Millbrae: containment, removal and moisture control.',
                    'links' => [
                        [
                            'anchor' => 'Mold remediation',
                            'href' => '/mold-remediation',
                            'pos' => 29,
                        ],
                    ],
                ],
            ],
            [
                'p' => [
                    'text' => 'Condo water damage in Millbrae: multi-unit leaks with records for HOAs.',
                    'links' => [
                        [
                            'anchor' => 'Condo water damage',
                            'href' => '/condo-water-damage',
                            'pos' => 31,
                        ],
                    ],
                ],
            ],
            [
                'p' => [
                    'text' => 'Commercial water damage in Millbrae: restaurants, shops, offices and hotels.',
                    'links' => [
                        [
                            'anchor' => 'Commercial water damage',
                            'href' => '/commercial-water-damage',
                            'pos' => 36,
                        ],
                    ],
                ],
            ],
            [
                'p' => [
                    'text' => 'Hardwood floor drying in Millbrae: original oak floors saved with drying mats.',
                    'links' => [
                        [
                            'anchor' => 'Hardwood floor drying',
                            'href' => '/hardwood-floor-water-damage',
                            'pos' => 34,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Hillside Home Water Damage: Why Slope Matters',
            ],
            [
                'p' => 'Hillside home water damage behaves differently from water damage on flat ground. On a slope, water does not just sit; it moves. During a storm, rain soaks the soil uphill, then flows underground toward your foundation and into the crawl space or garage. Gutters that overflow dump water right next to the foundation. Driveways that slope toward the house funnel street water straight to the garage door.',
            ],
            [
                'p' => 'That is why a Millbrae hillside home can stay dry for years, then flood during a storm that saturates the ground over several days. Once water gets under a raised floor, the soil there can stay wet for weeks, feeding humidity and mold into the home above. Quick pump-out and mechanical drying under the house make a big difference.',
            ],
            [
                'p' => 'Simple fixes that help after the dry-out:',
            ],
            [
                'ul' => [
                    'Extend downspouts several feet away from the foundation.',
                    'Add a trench drain at the bottom of a sloped driveway.',
                    'Keep crawl space vents and foundation drains clear.',
                    'Install a sump pump with battery backup if your crawl space floods repeatedly.',
                ],
            ],
            [
                'h2' => 'Water Damage Repair in Millbrae, CA: Our Process',
            ],
            [
                'p' => 'Water damage repair Millbrae CA homeowners can count on follows the same clear steps on every job:',
            ],
            [
                'h3' => '1. Call and Dispatch',
            ],
            [
                'p' => 'You call (650) 822-6798, describe the problem, and a crew is dispatched immediately.',
            ],
            [
                'h3' => '2. Make It Safe',
            ],
            [
                'p' => 'The source is stopped, power to wet areas is shut off, and hazards are checked.',
            ],
            [
                'h3' => '3. Map the Moisture',
            ],
            [
                'p' => 'Meters and thermal cameras show how far water spread into walls, floors and ceilings.',
            ],
            [
                'h3' => '4. Remove the Water',
            ],
            [
                'p' => 'Standing water is extracted from floors, carpet, garages and crawl spaces. This is the water removal Millbrae families need first, before anything else.',
            ],
            [
                'h3' => '5. Remove What Cannot Be Saved',
            ],
            [
                'p' => 'Wet pad, swollen baseboards, soaked insulation and contaminated materials come out.',
            ],
            [
                'h3' => '6. Dry and Treat',
            ],
            [
                'p' => 'Dehumidifiers and air movers run until readings reach normal levels. Surfaces are treated to prevent mold.',
            ],
            [
                'h3' => '7. Repair',
            ],
            [
                'p' => 'Drywall, flooring and finishes are restored.',
            ],
            [
                'h2' => 'Rainy Season in Millbrae',
            ],
            [
                'p' => 'Most water damage calls in Millbrae come between November and March, when Pacific storms bring days of rain and strong winds. Water removal Millbrae residents need during this season usually involves garages, crawl spaces and roof leaks. A few things to do before the rain:',
            ],
            [
                'ul' => [
                    'Clean gutters and downspouts.',
                    'Check the roof for loose or missing shingles.',
                    'Make sure the storm drain in front of your house is clear.',
                    'Keep belongings in garages on shelves, not on the floor.',
                    'Know where your main water shutoff is.',
                ],
            ],
            [
                'h2' => 'Condos, HOAs and Rentals in Millbrae',
            ],
            [
                'p' => 'In a Millbrae condo, a leak upstairs can affect your unit, the hallway and the unit below. Who pays depends on where the leak started and your HOA\'s CC&Rs. Generally, the unit owner covers their interior, and the HOA covers common elements like the roof and shared pipes. The crew does not decide responsibility, but it keeps separate photos and moisture logs for each affected unit so owners, tenants, the HOA and insurance companies can sort it out.',
            ],
            [
                'p' => 'For landlords with rentals, quick drying protects the building and helps tenants get back to normal faster.',
            ],
            [
                'h2' => 'Frequently Asked Questions About Water Damage in Millbrae',
            ],
            [
                'faq' => [
                    'q' => 'Do you serve all of Millbrae?',
                    'a' => [
                        'Yes. Every Millbrae neighborhood in 94030 is covered, from the Bayside flats to the hillside streets near I-280.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'How quickly can a crew arrive in Millbrae?',
                    'a' => [
                        'A crew is dispatched immediately after your call. Millbrae borders San Bruno, so crews are nearby.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Why does my hillside home\'s crawl space flood?',
                    'a' => [
                        'Rain soaks the slope above your home and flows underground toward the foundation. Without good drainage, it collects under the house.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Can my original hardwood floors be saved?',
                    'a' => [
                        'Often, yes, if drying starts quickly. Specialized mats pull water out of the boards before they cup.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Do you work with condo HOAs?',
                    'a' => [
                        'Yes. Records are kept separately for each unit so HOAs and owners have clear documentation.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Is mold a risk after water damage in Millbrae?',
                    'a' => [
                        'Yes. Hillside homes that get coastal fog stay damp, so mold can start within a few days if materials are not dried properly.',
                    ],
                ],
            ],
            [
                'h2' => 'Common Water Damage Calls in Millbrae by Season',
            ],
            [
                'h3' => 'Winter Storm Season',
            ],
            [
                'p' => 'November through March brings most calls: flooded garages, crawl space water, roof leaks and storm drain backups.',
            ],
            [
                'h3' => 'Spring and Early Summer',
            ],
            [
                'p' => 'As the ground dries, slow leaks that started in winter show up as stains, musty smells and mold.',
            ],
            [
                'h3' => 'Summer Fog Season',
            ],
            [
                'p' => 'Foggy months on the western side of town keep homes damp. Bathroom and closet mold calls increase.',
            ],
            [
                'h3' => 'Year-Round',
            ],
            [
                'p' => 'Burst pipes, water heater failures, appliance leaks and unit-to-unit condo leaks happen in every season.',
            ],
            [
                'h2' => 'Protecting Older Plumbing in Millbrae Homes',
            ],
            [
                'p' => 'Many Millbrae homes still have some original galvanized pipe. Low water pressure, rusty water and repeated small leaks are signs it is wearing out. A plumber can tell you how much original pipe remains and whether replacing sections now could prevent a burst later.',
            ],
            [
                'h2' => 'Water Damage in Millbrae Businesses Near SFO',
            ],
            [
                'p' => 'Hotels, restaurants and offices near SFO and along El Camino Real and Millbrae Avenue serve travelers and commuters around the clock. A water loss in one of these spaces affects guests, staff and revenue right away. The crew can section off wet areas, schedule work overnight, and keep room-by-room or area-by-area moisture logs so each space can reopen as soon as it is dry.',
            ],
            [
                'h2' => 'Nearby Cities We Serve',
            ],
            [
                'p' => [
                    'text' => 'The same crews also cover San Bruno, Burlingame, South San Francisco and Pacifica.',
                    'links' => [
                        [
                            'anchor' => 'San Bruno',
                            'href' => '/',
                            'pos' => 36,
                        ],
                        [
                            'anchor' => 'Burlingame',
                            'href' => '/burlingame-ca',
                            'pos' => 93,
                        ],
                        [
                            'anchor' => 'South San Francisco',
                            'href' => '/south-san-francisco-ca',
                            'pos' => 173,
                        ],
                        [
                            'anchor' => 'Pacifica',
                            'href' => '/pacifica-ca',
                            'pos' => 254,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Millbrae Homes Near SFO and the Bayside Flats',
            ],
            [
                'p' => 'The eastern side of Millbrae, closer to the Bay and SFO, is flatter and lower than the hills. Homes and businesses here deal with a different set of problems than hillside properties: storm drains that back up during heavy rain, slab leaks under older homes, and sewer laterals that have been in the ground for decades. Garages and ground-floor rooms are the first to take on water when storm drains cannot keep up. Keeping the storm drain in front of your home clear before big storms is one of the simplest ways to protect these properties.',
            ],
            [
                'h2' => 'Past Water Damage and Selling a Millbrae Home',
            ],
            [
                'p' => 'Buyers and inspectors look closely for signs of past water damage: stains on ceilings, warped floors, musty crawl spaces and patched drywall. If your home had a water loss, the drying records, moisture readings and photos from the cleanup are valuable. They show the damage was handled properly and dried to normal levels, which can make conversations with buyers and inspectors much easier. Keep a copy with your home records.',
            ],
            [
                'h2' => 'Mold in Millbrae\'s Western Hills',
            ],
            [
                'p' => [
                    'text' => 'Fog drifting over the hills from the coast keeps western Millbrae cooler and damper than the Bayside flats. Closets on exterior walls, bathrooms with weak fans and crawl spaces under raised homes are the most common places for mold. Running a dehumidifier in damp rooms, keeping bathroom fans on longer and checking the crawl space after storms all help. After any leak, fast mechanical drying is the best protection. See the fog and mold prevention guide.',
                    'links' => [
                        [
                            'anchor' => 'fog and mold prevention guide',
                            'href' => '/resources/peninsula-fog-mold-prevention',
                            'pos' => 456,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Call for Water Damage Restoration in Millbrae',
            ],
            [
                'p' => 'Whether it is a burst pipe, a flooded garage or a condo leak, call (650) 822-6798 for water damage restoration in Millbrae. A crew is dispatched immediately anywhere in 94030, day or night, and Millbrae water damage restoration starts with a clear plan.',
            ],
        ],
        'eyebrow' => 'WATER DAMAGE RESTORATION • MILLBRAE, CALIFORNIA',
    ],
    '/pacifica-ca' => [
        'type' => 'area',
        'kind' => 'area',
        'h1' => 'Rapid Water Damage Restoration in Pacifica, CA 94044',
        'meta' => [
            'title' => 'Rapid Water Damage Restoration Pacifica, CA 94044 | 24/7',
            'description' => 'Rapid water damage restoration in Pacifica, CA 94044. Floods, leaks, crawl spaces and mold. Call (650) 822-6798 for help now.',
        ],
        'blocks' => [
            [
                'p' => 'On the coast, water damage and mold travel together. A storm pushes water under a Linda Mar door, a crawl space in Vallemar fills after days of rain, a pipe bursts in a Sharp Park bungalow and the salty, foggy air keeps everything wet. Our water damage restoration Pacifica crews extract, dry, sanitize and repair across 94044. Call now and a crew is dispatched immediately.',
            ],
            [
                'h2' => 'Why do Pacifica homes get mold so fast after water damage?',
            ],
            [
                'p' => 'Pacifica sits directly on the ocean, where fog and humid marine air keep indoor humidity high. Wet drywall, wood and carpet stay damp longer, so mold can start within one to three days.',
            ],
            [
                'p' => 'In most of the Bay Area, a wet room left with the windows open slowly dries out. In Pacifica, it often does the opposite. The air coming off the Pacific is cool and close to saturated for much of the year, especially in summer fog season and through the wet winter. That means water damage here has to be dried mechanically, with dehumidifiers and careful measuring, or it turns into a mold problem. It is the single biggest difference between water damage on the coast and water damage over the hill.',
            ],
            [
                'h2' => 'Coastal Water Damage: What Makes Pacifica Different',
            ],
            [
                'h3' => 'Constant Moisture',
            ],
            [
                'p' => 'Fog and marine layer keep walls, closets and crawl spaces damp even without a leak. Add a leak and the moisture has nowhere to go.',
            ],
            [
                'h3' => 'Valleys and Creeks',
            ],
            [
                'p' => 'Pacifica\'s neighborhoods sit in valleys between coastal ridges. San Pedro Creek runs through Linda Mar to the beach, and Calera Creek drains the area near Rockaway Beach. Heavy storms raise these creeks fast and send runoff down the valleys.',
            ],
            [
                'h3' => 'Hillside Runoff',
            ],
            [
                'p' => 'Neighborhoods like Park Pacifica, Pacific Manor and the homes above Linda Mar Boulevard climb steep slopes. Storm water runs downhill into garages, lower rooms and crawl spaces.',
            ],
            [
                'h3' => 'Salt Air and Older Homes',
            ],
            [
                'p' => 'Salty air speeds up corrosion of exterior pipes, hose bibs, water heater fittings and metal flashing. Many Pacifica homes date from the 1950s and 1960s, with plumbing and roofs that are now decades old.',
            ],
            [
                'h3' => 'Wind-Driven Rain',
            ],
            [
                'p' => 'Storms come straight off the ocean with strong winds, pushing rain sideways under shingles, around windows and through siding.',
            ],
            [
                'h2' => 'Pacifica Neighborhoods We Serve',
            ],
            [
                'h3' => 'Linda Mar',
            ],
            [
                'p' => 'The largest neighborhood in town, with many homes from the 1950s and 1960s along Linda Mar Boulevard and the streets around it. Common calls: flooded garages after storms near San Pedro Creek, burst pipes and mold in bathrooms and closets.',
            ],
            [
                'h3' => 'Sharp Park and Fairway Park',
            ],
            [
                'p' => 'Near the beach and the golf course, closer to sea level. Storm water, high groundwater and slow drying in the salty, damp air are the main concerns.',
            ],
            [
                'h3' => 'Rockaway Beach and Pedro Point',
            ],
            [
                'p' => 'Oceanfront and near-ocean homes and businesses that take the full force of wind and salt. Roof and window leaks are common.',
            ],
            [
                'h3' => 'Vallemar and Park Pacifica',
            ],
            [
                'p' => 'Homes on the slopes of the valleys, often over crawl spaces. Runoff and crawl space water after long storms are typical.',
            ],
            [
                'h3' => 'Pacific Manor, Edgemar and Westview',
            ],
            [
                'p' => 'Northern neighborhoods near Highway 1 and the coastal bluffs, with older homes and plenty of fog. Mold and moisture problems come up often.',
            ],
            [
                'h2' => 'Mold After Water Damage in Pacifica',
            ],
            [
                'p' => 'Mold removal Pacifica homeowners ask about almost always starts with water: a leak that was not dried properly, a crawl space that flooded, or a slow drip behind a wall. Fast drying is the best protection.',
            ],
            [
                'p' => 'If mold has already started:',
            ],
            [
                'ul' => [
                    'The area is sealed off with plastic and negative air pressure so spores do not spread',
                    'HEPA air scrubbers clean the air during work',
                    'Moldy drywall, insulation and carpet are removed and bagged',
                    'Framing and hard surfaces are cleaned and treated',
                    'The area is dried to normal levels so mold does not return',
                ],
            ],
            [
                'p' => [
                    'text' => 'Coastal mold prevention also means changing how the house handles moisture day to day: running bath fans longer, using a dehumidifier in damp rooms, keeping furniture off exterior walls, and checking the crawl space after storms. More detail is in the fog and mold prevention guide.',
                    'links' => [
                        [
                            'anchor' => 'fog and mold prevention guide',
                            'href' => '/resources/peninsula-fog-mold-prevention',
                            'pos' => 282,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Every Water Damage Service, Available in Pacifica',
            ],
            [
                'h3' => 'Emergency Water Extraction in Pacifica',
            ],
            [
                'p' => [
                    'text' => 'Standing water pumped out of floors, garages and crawl spaces. See emergency water extraction.',
                    'links' => [
                        [
                            'anchor' => 'emergency water extraction',
                            'href' => '/emergency-water-extraction',
                            'pos' => 94,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Structural Drying in Pacifica',
            ],
            [
                'p' => [
                    'text' => 'Dehumidifiers and air movers sized for coastal humidity, with daily readings. See structural drying.',
                    'links' => [
                        [
                            'anchor' => 'structural drying',
                            'href' => '/structural-drying',
                            'pos' => 100,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Storm and Flood Cleanup in Pacifica',
            ],
            [
                'p' => [
                    'text' => 'Water from creeks, streets and hillsides cleaned out, disinfected and dried. See storm and flood damage.',
                    'links' => [
                        [
                            'anchor' => 'storm and flood damage',
                            'href' => '/storm-flood-water-damage',
                            'pos' => 104,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Crawl Space Water Damage in Pacifica',
            ],
            [
                'p' => [
                    'text' => 'Pump-out and drying under raised homes in the valleys and hills. See crawl space water damage.',
                    'links' => [
                        [
                            'anchor' => 'crawl space water damage',
                            'href' => '/crawl-space-water-damage',
                            'pos' => 94,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Burst Pipe Cleanup in Pacifica',
            ],
            [
                'p' => [
                    'text' => 'Older pipes and salt-corroded fittings that fail. See burst pipe water damage.',
                    'links' => [
                        [
                            'anchor' => 'burst pipe water damage',
                            'href' => '/burst-pipe-water-damage',
                            'pos' => 78,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Sewage Backup Cleanup in Pacifica',
            ],
            [
                'p' => [
                    'text' => 'Category 3 cleanup after sewer and drain backups. See sewage backup cleanup.',
                    'links' => [
                        [
                            'anchor' => 'sewage backup cleanup',
                            'href' => '/sewage-backup-cleanup',
                            'pos' => 76,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Flooded Garage Cleanup in Pacifica',
            ],
            [
                'p' => [
                    'text' => 'Runoff into garages and lower-level units. See flooded garage cleanup.',
                    'links' => [
                        [
                            'anchor' => 'flooded garage cleanup',
                            'href' => '/garage-in-law-unit-flooding',
                            'pos' => 70,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Roof Leak and Ceiling Water Damage in Pacifica',
            ],
            [
                'p' => [
                    'text' => 'Wind-driven rain off the ocean. See ceiling water damage.',
                    'links' => [
                        [
                            'anchor' => 'ceiling water damage',
                            'href' => '/roof-leak-ceiling-water-damage',
                            'pos' => 57,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Mold Remediation in Pacifica',
            ],
            [
                'p' => [
                    'text' => 'Containment, removal and drying. See mold remediation.',
                    'links' => [
                        [
                            'anchor' => 'mold remediation',
                            'href' => '/mold-remediation',
                            'pos' => 54,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Slab and Hidden Leaks in Pacifica',
            ],
            [
                'p' => [
                    'text' => 'Leaks under floors and inside walls. See slab leak water damage.',
                    'links' => [
                        [
                            'anchor' => 'slab leak water damage',
                            'href' => '/slab-leak-hidden-leak-water-damage',
                            'pos' => 64,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Water Heater and Appliance Leaks in Pacifica',
            ],
            [
                'p' => [
                    'text' => 'Tanks, washers, dishwashers and fridge lines. See water heater leak cleanup.',
                    'links' => [
                        [
                            'anchor' => 'water heater leak cleanup',
                            'href' => '/water-heater-appliance-leak',
                            'pos' => 76,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Condo and Rental Water Damage in Pacifica',
            ],
            [
                'p' => [
                    'text' => 'Unit-to-unit leaks and vacation rentals. See condo water damage.',
                    'links' => [
                        [
                            'anchor' => 'condo water damage',
                            'href' => '/condo-water-damage',
                            'pos' => 64,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Commercial Water Damage in Pacifica',
            ],
            [
                'p' => [
                    'text' => 'Shops, restaurants and hotels along Highway 1, Palmetto Avenue and the Linda Mar shopping center area. See commercial water damage.',
                    'links' => [
                        [
                            'anchor' => 'commercial water damage',
                            'href' => '/commercial-water-damage',
                            'pos' => 131,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Hardwood Floor Drying in Pacifica',
            ],
            [
                'p' => [
                    'text' => 'Wood floors dried in place before they cup. See hardwood floor water damage.',
                    'links' => [
                        [
                            'anchor' => 'hardwood floor water damage',
                            'href' => '/hardwood-floor-water-damage',
                            'pos' => 76,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Water Damage Repair in Pacifica, CA: Step by Step',
            ],
            [
                'p' => 'Water damage repair Pacifica CA homeowners need follows a clear path:',
            ],
            [
                'ul' => [
                    'Call (650) 822-6798 and a crew is dispatched immediately',
                    'The source is stopped and the area made safe',
                    'Moisture is mapped with meters and thermal cameras',
                    'Water is extracted and wet materials that cannot be saved are removed',
                    'Surfaces are cleaned and treated to prevent mold',
                    'Dehumidifiers run until readings reach normal levels, which often takes a little longer on the coast',
                    'Drywall, flooring and finishes are repaired',
                ],
            ],
            [
                'h2' => 'Getting Ready for Storm Season in Pacifica',
            ],
            [
                'p' => 'Pacifica\'s rainy season brings strong storms straight off the ocean. A few steps before winter go a long way:',
            ],
            [
                'ul' => [
                    'Clear gutters, downspouts and the storm drain by your home',
                    'Pick up sandbags early; the city has offered them behind the Linda Mar fire station at 1100 Linda Mar Boulevard',
                    'Move valuables off garage floors',
                    'Check that crawl space vents and foundation drains are clear',
                    'Test your sump pump and keep a battery backup',
                    'Know where your main water shutoff and breaker panel are',
                    'Sign up for San Mateo County emergency alerts',
                ],
            ],
            [
                'h2' => 'Vacation Rentals and Second Homes',
            ],
            [
                'p' => 'Pacifica has many short-term rentals and second homes that sit empty for days or weeks. A leak in an empty house can run for a long time before anyone notices. Water leak sensors with phone alerts, a smart shutoff valve, and a neighbor or manager who checks in after storms can prevent a small leak from becoming a major loss. If you find damage after a stay, call right away and the crew documents everything for your records and insurance.',
            ],
            [
                'h2' => 'Frequently Asked Questions About Water Damage in Pacifica',
            ],
            [
                'faq' => [
                    'q' => 'Do you cover all of Pacifica?',
                    'a' => [
                        'Yes. Every neighborhood in 94044 is covered, from Pacific Manor and Edgemar in the north to Linda Mar and Pedro Point in the south.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Why does drying take longer in Pacifica?',
                    'a' => [
                        'The ocean air is humid much of the year, so materials release moisture slowly. Dehumidifiers are essential, and drying may take a day or two longer than inland.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Can I open windows to dry my house?',
                    'a' => [
                        'Usually not on the coast. Damp marine air can add moisture rather than remove it. Keep windows closed and let dehumidifiers do the work.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Is flood damage from creeks covered by insurance?',
                    'a' => [
                        'Outside flooding is usually excluded from homeowners policies and needs separate flood coverage. Check your policy.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'How quickly can mold grow in Pacifica?',
                    'a' => [
                        'On wet materials in humid coastal air, mold can start in 24 to 72 hours, so drying should begin right away.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Do you work on vacation rentals?',
                    'a' => [
                        'Yes. Short-term rentals and second homes are covered, with documentation for owners and property managers.',
                    ],
                ],
            ],
            [
                'h2' => 'Rooms Built Into Pacifica Hillsides',
            ],
            [
                'p' => 'In neighborhoods like Park Pacifica, Vallemar and the slopes above Linda Mar, many homes have lower rooms built partly into the hillside. These rooms have an uphill wall against the soil, and after long storms water can seep through that wall or the slab. Damp carpet, a musty smell and mold along the base of that wall are common signs. Drying these rooms takes dehumidifiers, and long-term fixes include drainage behind the wall and a dehumidifier running during the wet months.',
            ],
            [
                'h2' => 'Coastal Homes Left Empty',
            ],
            [
                'p' => 'Homes that sit empty for part of the year, whether vacation rentals or second homes, are at higher risk on the coast. A leak can run unnoticed, and closed-up houses in humid air grow mold quickly. A smart water shutoff, leak sensors and a humidity monitor with phone alerts are simple ways to protect an empty home. Ask a neighbor or property manager to walk through after big storms, and check the garage, crawl space and lower rooms first, since that is where water usually shows up before anything else.',
            ],
            [
                'h2' => 'Nearby Areas We Serve',
            ],
            [
                'p' => [
                    'text' => 'The same crews also cover San Bruno, South San Francisco and Millbrae.',
                    'links' => [
                        [
                            'anchor' => 'San Bruno',
                            'href' => '/',
                            'pos' => 36,
                        ],
                        [
                            'anchor' => 'South San Francisco',
                            'href' => '/south-san-francisco-ca',
                            'pos' => 102,
                        ],
                        [
                            'anchor' => 'Millbrae',
                            'href' => '/millbrae-ca',
                            'pos' => 183,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Crawl Spaces on the Coast',
            ],
            [
                'p' => 'Many Pacifica homes sit over crawl spaces, and on the coast those spaces almost never fully dry out on their own. Foundation vents bring in cool, damp ocean air, and the soil underneath holds moisture after every storm. When a crawl space also takes on storm water or a pipe leak, the framing above can stay wet for weeks. Pump-out, removal of soaked insulation, and dehumidifiers running under the house are the only reliable way to get it dry. Afterward, a heavier vapor barrier and good drainage on the uphill side of the home help keep it that way.',
            ],
            [
                'h2' => 'Salt Air and Plumbing Corrosion',
            ],
            [
                'p' => 'Salty ocean air is hard on metal. In Pacifica, exterior hose bibs, water heater fittings, gas lines, metal flashing and even the copper or galvanized pipes close to vents and openings corrode faster than they would inland. Small leaks at corroded fittings can drip for a long time before anyone notices. A yearly look at exposed plumbing in the garage, crawl space and around the water heater can catch corrosion before it turns into a leak.',
            ],
            [
                'h2' => 'Businesses Along Highway 1 and Palmetto Avenue',
            ],
            [
                'p' => 'Restaurants, shops and hotels near the beach and along Highway 1 face the same wind, salt and storms as homes, often with large windows and older roofs. When water gets in, the goal is to get the business back open quickly. The crew can section off wet areas, dry in phases and schedule disruptive work after hours.',
            ],
            [
                'h2' => 'Call for Water Damage Restoration in Pacifica',
            ],
            [
                'p' => 'On the coast, every hour counts. For water damage restoration in Pacifica, from creek flooding to a hidden leak, call (650) 822-6798. A crew is dispatched immediately anywhere in 94044, and mold removal in Pacifica starts with getting everything dry. For any water damage repair Pacifica CA homes need, the number is the same.',
            ],
        ],
        'eyebrow' => 'WATER DAMAGE RESTORATION • PACIFICA, CALIFORNIA',
    ],
    '/burlingame-ca' => [
        'type' => 'area',
        'kind' => 'area',
        'h1' => 'Professional Water Damage Restoration in Burlingame, CA 94010',
        'meta' => [
            'title' => 'Professional Water Damage Restoration Burlingame, CA 94010',
            'description' => 'Water damage restoration in Burlingame, CA 94010 for older homes, basements and businesses. Call (650) 822-6798 for 24/7 help.',
        ],
        'blocks' => [
            [
                'p' => 'A basement taking on water during a long storm. A pipe giving out inside the wall of an Easton Addition home. A leak above a shop on Burlingame Avenue. Our water damage restoration Burlingame crews extract, dry, sanitize and repair across 94010, with extra care for older homes and original finishes. Call now and a crew is dispatched immediately.',
            ],
            [
                'h2' => 'Do older Burlingame homes with basements flood during storms?',
            ],
            [
                'p' => 'Yes. Many early-1900s Burlingame homes have basements or partial basements that take on groundwater and runoff during long storms, especially on low lots and near small creeks.',
            ],
            [
                'p' => 'Burlingame grew up earlier than most of the Peninsula. Many homes in neighborhoods like Easton Addition, Burlingame Park and around Washington Park were built in the 1910s through the 1940s, often with basements, original oak floors, plaster walls and plumbing that has been patched over the decades. Those features give the city its character, and they also shape how water damage happens and how it has to be dried.',
            ],
            [
                'h2' => 'Why Older Burlingame Homes Need a Different Approach',
            ],
            [
                'h3' => 'Basements and Below-Grade Rooms',
            ],
            [
                'p' => 'Basements sit below the surrounding soil. When the ground is saturated after days of rain, groundwater pushes through foundation walls, floor cracks and the joint where the floor meets the wall. Basements with laundry rooms, workshops or finished living space can lose flooring, drywall and stored belongings. Basement flooding Burlingame homeowners see most often happens late in the rainy season, after the soil has been soaking for weeks.',
            ],
            [
                'h3' => 'Plaster Walls',
            ],
            [
                'p' => 'Plaster and lath walls hold water differently than drywall. They can dry well if handled carefully, but they can also lose their bond and crack. The crew dries plaster slowly and checks it before any repair decision.',
            ],
            [
                'h3' => 'Original Hardwood Floors',
            ],
            [
                'p' => [
                    'text' => 'Old-growth oak and fir floors are worth saving. Caught early, they can usually be dried in place with floor mats before they cup or buckle. See hardwood floor water damage.',
                    'links' => [
                        [
                            'anchor' => 'hardwood floor water damage',
                            'href' => '/hardwood-floor-water-damage',
                            'pos' => 172,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Aging Plumbing and Sewer Laterals',
            ],
            [
                'p' => 'Galvanized supply lines, cast iron drains and clay sewer laterals are common in older homes. Roots and corrosion lead to leaks and sewage backups, often into basements first.',
            ],
            [
                'h3' => 'Large Trees',
            ],
            [
                'p' => 'Burlingame\'s mature street trees are a big part of the city, but their roots can crack sewer laterals and foundation drains, and falling limbs can damage roofs during storms.',
            ],
            [
                'h2' => 'Older Home Basement Flooding: What to Do',
            ],
            [
                'p' => 'Older home basement flooding needs a careful response:',
            ],
            [
                'ul' => [
                    'Stay out of the basement if water is near outlets, the electrical panel, the furnace or the water heater',
                    'If it is safe, shut off power to the basement at the breaker',
                    'Move belongings off the floor and away from walls',
                    'Do not pump out a deeply flooded basement too fast if the soil outside is still saturated, because pressure from the outside can damage walls',
                    'Photograph everything',
                    'Call (650) 822-6798',
                ],
            ],
            [
                'p' => 'The crew pumps water out at a safe rate, removes wet materials, cleans and disinfects, and dries the space with dehumidifiers and air movers. Afterward, you get practical advice on drainage, sump pumps and sealing to reduce the chance of it happening again.',
            ],
            [
                'h2' => 'Water Damage Repair in Burlingame, CA for Every Type of Loss',
            ],
            [
                'p' => 'Water damage repair Burlingame CA homes and businesses need covers far more than basements. Every service is available across 94010:',
            ],
            [
                'h3' => 'Emergency Water Extraction in Burlingame',
            ],
            [
                'p' => [
                    'text' => 'Standing water removed from floors, basements and garages. See emergency water extraction.',
                    'links' => [
                        [
                            'anchor' => 'emergency water extraction',
                            'href' => '/emergency-water-extraction',
                            'pos' => 90,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Structural Drying in Burlingame',
            ],
            [
                'p' => [
                    'text' => 'Controlled drying with daily readings, gentle enough for plaster and old wood. See structural drying.',
                    'links' => [
                        [
                            'anchor' => 'structural drying',
                            'href' => '/structural-drying',
                            'pos' => 101,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Burst Pipe Cleanup in Burlingame',
            ],
            [
                'p' => [
                    'text' => 'Old supply lines that fail inside walls and under floors. See burst pipe water damage.',
                    'links' => [
                        [
                            'anchor' => 'burst pipe water damage',
                            'href' => '/burst-pipe-water-damage',
                            'pos' => 86,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Sewage Backup Cleanup in Burlingame',
            ],
            [
                'p' => [
                    'text' => 'Root-damaged laterals and basement drain backups. See sewage backup cleanup.',
                    'links' => [
                        [
                            'anchor' => 'sewage backup cleanup',
                            'href' => '/sewage-backup-cleanup',
                            'pos' => 76,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Storm and Flood Cleanup in Burlingame',
            ],
            [
                'p' => [
                    'text' => 'Groundwater, runoff and creek-related flooding. See storm and flood damage.',
                    'links' => [
                        [
                            'anchor' => 'storm and flood damage',
                            'href' => '/storm-flood-water-damage',
                            'pos' => 75,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Crawl Space Water Damage in Burlingame',
            ],
            [
                'p' => [
                    'text' => 'Water under raised homes in Burlingame Hills and other sloped areas. See crawl space water damage.',
                    'links' => [
                        [
                            'anchor' => 'crawl space water damage',
                            'href' => '/crawl-space-water-damage',
                            'pos' => 98,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Flooded Garage Cleanup in Burlingame',
            ],
            [
                'p' => [
                    'text' => 'Detached and attached garages, plus converted spaces. See flooded garage cleanup.',
                    'links' => [
                        [
                            'anchor' => 'flooded garage cleanup',
                            'href' => '/garage-in-law-unit-flooding',
                            'pos' => 81,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Ceiling and Roof Leak Damage in Burlingame',
            ],
            [
                'p' => [
                    'text' => 'Storm leaks and bathrooms above. See ceiling water damage.',
                    'links' => [
                        [
                            'anchor' => 'ceiling water damage',
                            'href' => '/roof-leak-ceiling-water-damage',
                            'pos' => 58,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Slab and Hidden Leaks in Burlingame',
            ],
            [
                'p' => [
                    'text' => 'Leaks inside walls and under floors. See slab leak water damage.',
                    'links' => [
                        [
                            'anchor' => 'slab leak water damage',
                            'href' => '/slab-leak-hidden-leak-water-damage',
                            'pos' => 64,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Water Heater and Appliance Leaks in Burlingame',
            ],
            [
                'p' => [
                    'text' => 'Basement and garage water heaters, washers and dishwashers. See water heater leak cleanup.',
                    'links' => [
                        [
                            'anchor' => 'water heater leak cleanup',
                            'href' => '/water-heater-appliance-leak',
                            'pos' => 90,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Mold Remediation in Burlingame',
            ],
            [
                'p' => [
                    'text' => 'Basements and older homes where moisture lingers. See mold remediation.',
                    'links' => [
                        [
                            'anchor' => 'mold remediation',
                            'href' => '/mold-remediation',
                            'pos' => 71,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Condo Water Damage in Burlingame',
            ],
            [
                'p' => [
                    'text' => 'Apartment and condo buildings near downtown and El Camino. See condo water damage.',
                    'links' => [
                        [
                            'anchor' => 'condo water damage',
                            'href' => '/condo-water-damage',
                            'pos' => 82,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Commercial Water Damage in Burlingame',
            ],
            [
                'p' => [
                    'text' => 'Shops, restaurants, offices and hotels. See commercial water damage.',
                    'links' => [
                        [
                            'anchor' => 'commercial water damage',
                            'href' => '/commercial-water-damage',
                            'pos' => 68,
                        ],
                    ],
                ],
            ],
            [
                'h3' => 'Hardwood Floor Drying in Burlingame',
            ],
            [
                'p' => 'Original floors dried in place. See hardwood floor water damage.',
            ],
            [
                'h2' => 'Burlingame Neighborhoods We Serve',
            ],
            [
                'ul' => [
                    'Easton Addition: older homes, basements and original floors',
                    'Burlingame Park and Washington Park area: early 1900s homes under large trees',
                    'Burlingame Hills and Mills Canyon area: hillside homes with runoff and crawl spaces',
                    'Ray Park: mid-century homes with aging plumbing',
                    'Downtown around Burlingame Avenue and the Caltrain station: shops, restaurants and apartments',
                    'Broadway: storefronts and mixed-use buildings',
                    'The Bayfront along Airport Boulevard: hotels and offices',
                ],
            ],
            [
                'h2' => 'Commercial Water Damage in Burlingame',
            ],
            [
                'p' => 'Burlingame\'s business districts are busy. A water loss on Burlingame Avenue or Broadway means a closed storefront, and a leak in a Bayfront hotel affects guests and rooms on several floors. Water damage restoration Burlingame businesses need focuses on keeping doors open: wet areas are sectioned off, drying is done in phases, and noisy work happens overnight. Restaurants get kitchens cleaned, sanitized and dried for inspection as quickly as possible. Hotels get room-by-room moisture logs so rooms can return to service as they dry.',
            ],
            [
                'h2' => 'Drying Older Materials Without Damaging Them',
            ],
            [
                'p' => 'Older materials need a measured approach. Drying plaster, old-growth wood and original trim too fast can crack, warp or split them. The crew:',
            ],
            [
                'ul' => [
                    'Measures moisture in each material and compares it to dry areas of the same home',
                    'Controls temperature and humidity so materials release water gradually',
                    'Uses floor mats and wall cavity drying to save finishes instead of tearing them out',
                    'Documents readings daily so you can see progress',
                ],
            ],
            [
                'p' => 'The goal is always to save what can be saved and replace only what cannot.',
            ],
            [
                'h2' => 'Preventing Water Damage in Burlingame Homes',
            ],
            [
                'ul' => [
                    'Have older sewer laterals inspected with a camera, especially under large trees',
                    'Install a backwater valve if your basement has had a backup',
                    'Add or service a sump pump in basements that take on water',
                    'Clean gutters often in fall, when leaves from street trees pile up',
                    'Replace old rubber hoses on washers and toilets with braided steel',
                    'Check the basement and crawl space after every big storm',
                ],
            ],
            [
                'h2' => 'Frequently Asked Questions About Water Damage in Burlingame',
            ],
            [
                'faq' => [
                    'q' => 'Can a flooded basement be dried without tearing everything out?',
                    'a' => [
                        'Often, yes. Unfinished basements usually dry well. Finished basements may need flooring and the bottom of drywall removed, depending on the water and how long it sat.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Can plaster walls be saved after a leak?',
                    'a' => [
                        'Usually, if they are dried carefully and have not lost their bond to the lath. The crew checks before recommending repair or replacement.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Do you work on businesses on Burlingame Avenue and Broadway?',
                    'a' => [
                        'Yes. Shops, restaurants and offices are covered, with after-hours work to limit downtime.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'How fast can a crew reach Burlingame?',
                    'a' => [
                        'A crew is dispatched immediately after you call (650) 822-6798, at any hour.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Is basement flooding covered by insurance?',
                    'a' => [
                        'Groundwater and outside flooding are often excluded, while a burst pipe or failed water heater is often covered. Sewer backup may need a specific endorsement. Check your policy.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Do you serve all of 94010?',
                    'a' => [
                        'Yes, plus nearby Millbrae, San Bruno and the surrounding cities.',
                    ],
                ],
            ],
            [
                'h2' => 'Basement Waterproofing After a Flood',
            ],
            [
                'p' => 'Once a Burlingame basement is dry, the next question is how to keep water out. Common options include:',
            ],
            [
                'ul' => [
                    'Repairing cracks in foundation walls and floors',
                    'Improving grading and downspouts so water flows away from the house',
                    'Installing or upgrading a sump pump with battery backup',
                    'Adding an interior drain system along the base of the walls',
                    'Applying a waterproof coating on the inside of foundation walls',
                    'Installing a backwater valve on the sewer line',
                ],
            ],
            [
                'p' => 'The right combination depends on where the water comes in. Watching the basement during the next storm, and noting exactly where water appears, helps a contractor recommend the right fix.',
            ],
            [
                'h2' => 'Finished Basements and Mold',
            ],
            [
                'p' => 'Finished basements with carpet, drywall and insulation are the most likely to grow mold after a flood. If a finished basement takes on water, the bottom of the drywall and the insulation behind it usually need to come out so the wall can dry. Rebuilding with moisture-resistant materials, such as tile or vinyl flooring and mold-resistant drywall, reduces the damage the next time.',
            ],
            [
                'h2' => 'Downtown Burlingame Shops and Restaurants',
            ],
            [
                'p' => 'The shops and restaurants along Burlingame Avenue and Broadway are often in older buildings with apartments or offices above. A leak upstairs can reach the storefront below, and a sewer backup can affect several businesses on the same line. Drying is planned around business hours whenever possible, with wet areas closed off and disruptive work done after closing, so neighbors and customers are affected as little as possible. Moisture records for each space help owners, tenants and insurance companies see exactly what was affected.',
            ],
            [
                'h2' => 'Nearby Areas We Serve',
            ],
            [
                'p' => [
                    'text' => 'The same crews also cover Millbrae, San Bruno and South San Francisco.',
                    'links' => [
                        [
                            'anchor' => 'Millbrae',
                            'href' => '/millbrae-ca',
                            'pos' => 35,
                        ],
                        [
                            'anchor' => 'San Bruno',
                            'href' => '/',
                            'pos' => 103,
                        ],
                        [
                            'anchor' => 'South San Francisco',
                            'href' => '/south-san-francisco-ca',
                            'pos' => 172,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Large Trees, Roots and Sewer Backups in Burlingame',
            ],
            [
                'p' => 'Burlingame is known for its tall street trees, especially the eucalyptus and elms that line many older neighborhoods. Those trees are part of what makes the city special, but their roots go looking for water and can find it inside old clay and cast iron sewer laterals. Over time, roots fill the pipe, catch paper and debris, and cause backups. If your home has a large tree near the line and you notice slow drains or gurgling, a camera inspection can show whether roots are the problem. Fixing it early is far cheaper than cleaning up after sewage reaches a basement or ground-floor bathroom.',
            ],
            [
                'h2' => 'Hotels and Offices on the Bayfront',
            ],
            [
                'p' => 'The Bayfront along Airport Boulevard is home to many hotels and office buildings serving travelers and businesses near SFO. In large buildings like these, water losses often start above the ground floor: a guest room bathroom overflow, a sprinkler line break or a roof leak during a storm. Water travels down through ceilings and walls into rooms and corridors below. Fast extraction, room-by-room moisture readings and careful scheduling help hotels return rooms to service as each one dries, and help offices keep most of their space open.',
            ],
            [
                'h2' => 'Burlingame Hills and Mills Canyon: Hillside Moisture',
            ],
            [
                'p' => 'Up in Burlingame Hills and the areas near Mills Canyon, homes sit on slopes surrounded by trees. Storm runoff, shady lots that stay damp, and crawl spaces under raised floors combine to create moisture problems. After heavy rain, check the crawl space and lower rooms for water, and keep gutters clear of leaves, which pile up fast in these wooded neighborhoods.',
            ],
            [
                'h2' => 'Call for Water Damage Restoration in Burlingame',
            ],
            [
                'p' => 'Older homes deserve careful work. For water damage restoration in Burlingame, from a flooded basement to a leak above a storefront, call (650) 822-6798. A crew is dispatched immediately anywhere in 94010, and every water damage repair Burlingame CA homes need starts with a clear plan.',
            ],
        ],
        'eyebrow' => 'WATER DAMAGE RESTORATION • BURLINGAME, CALIFORNIA',
    ],
    '/brisbane-ca' => [
        'type' => 'area',
        'kind' => 'area',
        'h1' => 'Local Water Damage Restoration in Brisbane, CA 94005',
        'meta' => [
            'title' => 'Local Water Damage Restoration Brisbane, CA 94005 | 24/7 Help',
            'description' => 'Local water damage restoration in Brisbane, CA 94005. Hillside runoff, leaks, sewage and mold. Call (650) 822-6798 for help now.',
        ],
        'blocks' => [
            [
                'p' => 'Brisbane homes are built right into the slopes of San Bruno Mountain, and when winter storms hit, the water comes downhill fast. Our water damage restoration Brisbane crews pump out flooded garages and lower rooms, dry crawl spaces, clean up sewage and repair the damage across 94005, from Central Brisbane to Sierra Point. Call now and a crew is dispatched immediately.',
            ],
            [
                'h2' => 'How does San Bruno Mountain runoff affect Brisbane homes?',
            ],
            [
                'p' => 'During heavy rain, water from the mountain\'s steep slopes flows down streets, driveways and through soil into garages, lower floors and crawl spaces of homes below.',
            ],
            [
                'p' => 'Brisbane is a small hillside town tucked between San Bruno Mountain and the Bay. Most homes in Central Brisbane sit on narrow, steep lots, many with garages at street level and living space stacked above or behind. Streets like Visitacion Avenue and the winding roads above it climb sharply. That layout makes Brisbane charming, and it also means storm water has a long, fast path downhill. The lower your home sits on the slope, and the more of it is at or below street level, the more runoff it sees.',
            ],
            [
                'h2' => 'How Water Gets Into Brisbane Homes',
            ],
            [
                'h3' => 'Street and Driveway Runoff',
            ],
            [
                'p' => 'On steep streets, rain turns into a fast sheet of water. Driveways that slope toward a garage guide it straight under the door.',
            ],
            [
                'h3' => 'Subsurface Water',
            ],
            [
                'p' => 'Rain soaks the hillside above, then moves underground toward foundations. It seeps through retaining walls, foundation walls and slab joints.',
            ],
            [
                'h3' => 'Retaining Walls',
            ],
            [
                'p' => 'Many Brisbane lots rely on retaining walls. When weep holes clog or drainage behind the wall fails, water builds up and pushes through into lower rooms.',
            ],
            [
                'h3' => 'Wind-Driven Rain',
            ],
            [
                'p' => 'Storms crossing the mountain bring strong gusts. Rain gets pushed under shingles, around windows and through older siding.',
            ],
            [
                'h3' => 'Aging Plumbing',
            ],
            [
                'p' => 'Many homes date from the mid-1900s, with original galvanized pipes and older sewer laterals that fail with age.',
            ],
            [
                'h2' => 'Hillside Runoff Damage: What It Looks Like',
            ],
            [
                'p' => 'Hillside runoff damage in Brisbane usually shows up as:',
            ],
            [
                'ul' => [
                    'Water across a garage floor after a storm',
                    'Wet carpet or flooring in a lower-level bedroom or family room',
                    'Damp drywall along the uphill wall of the house',
                    'Musty smells in rooms built into the hillside',
                    'Standing water or mud in a crawl space',
                    'Efflorescence, a white powder, on concrete and block walls',
                ],
            ],
            [
                'p' => 'If any of these show up, call right away. Runoff is usually contaminated with soil, debris and bacteria, so it needs cleaning and disinfection along with drying.',
            ],
            [
                'h2' => 'Water Damage Services in Brisbane',
            ],
            [
                'p' => 'Every service is available in Brisbane 94005, for homes and businesses:',
            ],
            [
                'ul' => [
                    [
                        'text' => 'Emergency water extraction in Brisbane: pumps for garages, lower rooms and crawl spaces',
                        'links' => [
                            [
                                'anchor' => 'Emergency water extraction',
                                'href' => '/emergency-water-extraction',
                                'pos' => 88,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Structural drying in Brisbane: dehumidifiers and daily readings',
                        'links' => [
                            [
                                'anchor' => 'Structural drying',
                                'href' => '/structural-drying',
                                'pos' => 64,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Flooded garage cleanup in Brisbane: street-level garages and lower units',
                        'links' => [
                            [
                                'anchor' => 'Flooded garage cleanup',
                                'href' => '/garage-in-law-unit-flooding',
                                'pos' => 73,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Storm and flood cleanup in Brisbane: runoff and storm water',
                        'links' => [
                            [
                                'anchor' => 'Storm and flood cleanup',
                                'href' => '/storm-flood-water-damage',
                                'pos' => 60,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Crawl space water damage in Brisbane: water under raised floors',
                        'links' => [
                            [
                                'anchor' => 'Crawl space water damage',
                                'href' => '/crawl-space-water-damage',
                                'pos' => 64,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Burst pipe cleanup in Brisbane: older supply lines',
                        'links' => [
                            [
                                'anchor' => 'Burst pipe cleanup',
                                'href' => '/burst-pipe-water-damage',
                                'pos' => 51,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Sewage backup cleanup in Brisbane: Category 3 cleanup',
                        'links' => [
                            [
                                'anchor' => 'Sewage backup cleanup',
                                'href' => '/sewage-backup-cleanup',
                                'pos' => 54,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Roof leak and ceiling water damage in Brisbane: wind-driven rain',
                        'links' => [
                            [
                                'anchor' => 'ceiling water damage',
                                'href' => '/roof-leak-ceiling-water-damage',
                                'pos' => 65,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Slab and hidden leaks in Brisbane: leaks under floors and in walls',
                        'links' => [
                            [
                                'anchor' => 'Slab and hidden leaks',
                                'href' => '/slab-leak-hidden-leak-water-damage',
                                'pos' => 67,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Water heater and appliance leaks in Brisbane',
                        'links' => [
                            [
                                'anchor' => 'Water heater and appliance leaks',
                                'href' => '/water-heater-appliance-leak',
                                'pos' => 45,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Mold remediation in Brisbane: fog and hillside moisture',
                        'links' => [
                            [
                                'anchor' => 'Mold remediation',
                                'href' => '/mold-remediation',
                                'pos' => 56,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Condo and apartment water damage in Brisbane',
                        'links' => [
                            [
                                'anchor' => 'Condo and apartment water damage',
                                'href' => '/condo-water-damage',
                                'pos' => 45,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Commercial water damage in Brisbane: Sierra Point offices and businesses',
                        'links' => [
                            [
                                'anchor' => 'Commercial water damage',
                                'href' => '/commercial-water-damage',
                                'pos' => 73,
                            ],
                        ],
                    ],
                    [
                        'text' => 'Hardwood floor drying in Brisbane',
                        'links' => [
                            [
                                'anchor' => 'Hardwood floor drying',
                                'href' => '/hardwood-floor-water-damage',
                                'pos' => 34,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Commercial Water Damage at Sierra Point and Along Bayshore',
            ],
            [
                'p' => 'Sierra Point, on the Bay side of 101, has office buildings, research space and the Brisbane Marina. Businesses along Bayshore Boulevard and in the industrial area near Old County Road also see water damage from roof leaks, sprinkler breaks and storm water. Water damage repair Brisbane CA businesses need is planned around operations: wet areas are sectioned off, drying runs in phases, and disruptive work can happen after hours. Detailed moisture logs and photos support insurance claims and facility records.',
            ],
            [
                'h2' => 'Our Process in Brisbane',
            ],
            [
                'h3' => 'Immediate Dispatch',
            ],
            [
                'p' => 'Call (650) 822-6798 and a crew is dispatched immediately. Brisbane is just north of San Bruno, so crews are close.',
            ],
            [
                'h3' => 'Stop the Water and Make It Safe',
            ],
            [
                'p' => 'The source is stopped where possible. During storms, temporary steps like diverting water or sandbagging may come first. Power to wet areas is shut off.',
            ],
            [
                'h3' => 'Pump Out and Clean Up',
            ],
            [
                'p' => 'Water, mud and debris are removed from garages, lower rooms and crawl spaces.',
            ],
            [
                'h3' => 'Remove Damaged Materials',
            ],
            [
                'p' => 'Carpet, pad, drywall and insulation soaked by runoff are removed.',
            ],
            [
                'h3' => 'Clean and Disinfect',
            ],
            [
                'p' => 'Runoff is contaminated, so surfaces are cleaned and treated.',
            ],
            [
                'h3' => 'Dry',
            ],
            [
                'p' => 'Dehumidifiers and air movers dry the structure to normal moisture levels.',
            ],
            [
                'h3' => 'Repair',
            ],
            [
                'p' => 'Drywall, flooring and finishes are restored.',
            ],
            [
                'h2' => 'Keeping Runoff Out of a Brisbane Home',
            ],
            [
                'p' => 'After the dry-out, these steps can make a real difference on a hillside lot:',
            ],
            [
                'ul' => [
                    'Keep retaining wall weep holes and drains clear',
                    'Install a trench drain where the driveway meets the garage',
                    'Extend downspouts away from the foundation, ideally into a drain line',
                    'Seal cracks in garage slabs and foundation walls',
                    'Keep stored items in garages on shelves or in sealed bins',
                    'Clear the storm drain on your street before big storms',
                    'Consider a sump pump for lower rooms that flood repeatedly',
                ],
            ],
            [
                'h2' => 'Fog, Wind and Moisture on San Bruno Mountain',
            ],
            [
                'p' => [
                    'text' => 'Brisbane sits in the path of fog and wind coming over San Bruno Mountain. Rooms built into the hillside, especially lower levels with an uphill wall against soil, stay cool and damp. After a water loss, these rooms need mechanical drying with dehumidifiers, and they benefit from a dehumidifier long-term to keep mold away. See the fog and mold prevention guide.',
                    'links' => [
                        [
                            'anchor' => 'fog and mold prevention guide',
                            'href' => '/resources/peninsula-fog-mold-prevention',
                            'pos' => 362,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Frequently Asked Questions About Water Damage in Brisbane',
            ],
            [
                'faq' => [
                    'q' => 'Do you serve all of Brisbane?',
                    'a' => [
                        'Yes. All of 94005 is covered, including Central Brisbane, the hillside streets, Sierra Point and the Bayshore area.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'How quickly can a crew get to Brisbane?',
                    'a' => [
                        'A crew is dispatched immediately after your call. Brisbane borders South San Francisco and is close to San Bruno.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Is runoff damage covered by insurance?',
                    'a' => [
                        'Surface water and outside flooding are often excluded from homeowners policies. Damage from a burst pipe or appliance is often covered. Check your policy.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Why does my lower level smell musty after storms?',
                    'a' => [
                        'Water from the hillside may be seeping through the uphill wall or slab, keeping materials damp and feeding mold. A moisture check can find it.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Do you work with businesses at Sierra Point?',
                    'a' => [
                        'Yes. Offices, research space and businesses are covered, with after-hours scheduling.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Can retaining wall drainage cause water damage?',
                    'a' => [
                        'Yes. When drainage behind a retaining wall clogs, water builds up and can push into lower rooms.',
                    ],
                ],
            ],
            [
                'h2' => 'Water Damage in Brisbane by Season',
            ],
            [
                'h3' => 'Winter Storms',
            ],
            [
                'p' => 'Most Brisbane water damage happens between November and March, when storms bring heavy rain and wind across San Bruno Mountain. Runoff floods garages and lower rooms, crawl spaces fill, and roofs leak.',
            ],
            [
                'h3' => 'Spring',
            ],
            [
                'p' => 'After long wet winters, slow seepage through hillside walls and slabs continues for weeks. Musty smells and mold often appear now.',
            ],
            [
                'h3' => 'Summer Fog',
            ],
            [
                'p' => 'Fog and wind keep homes on the hillside cool and damp, especially lower levels. Bathroom and closet mold are common.',
            ],
            [
                'h3' => 'Year-Round',
            ],
            [
                'p' => 'Burst pipes, water heater leaks, appliance failures and sewer backups can happen any time.',
            ],
            [
                'h2' => 'Protecting Belongings in a Brisbane Garage',
            ],
            [
                'p' => 'Because street-level garages take the first hit in a storm, store belongings on shelves at least a foot off the floor and use plastic bins with lids instead of cardboard. Raise the water heater and washer on platforms if possible, and keep extension cords and power strips off the floor. Before a big storm, move anything valuable to an upper level of the house.',
            ],
            [
                'h2' => 'Neighbors Downhill and Uphill',
            ],
            [
                'p' => 'On steep streets, water from one property often affects the next. A clogged drain or broken pipe uphill can send water toward homes below. Talking with neighbors about drainage, keeping shared drains clear, and letting each other know about leaks can prevent damage for everyone on the slope.',
            ],
            [
                'h2' => 'Mold in Hillside Rooms',
            ],
            [
                'p' => 'Lower rooms built into the slope are the most common place for mold in Brisbane homes. The uphill wall stays cold and damp, and furniture pushed against it blocks airflow. Signs include a musty smell, dark spots at the base of the wall, and damp carpet along that side of the room. Moving furniture away from the wall, running a dehumidifier and improving drainage outside are the first steps. If mold is already growing, the affected area should be contained and removed properly. See mold remediation.',
            ],
            [
                'h2' => 'Questions to Ask Before Rebuilding a Lower Level',
            ],
            [
                'p' => 'Before putting back drywall and flooring in a room that took on runoff, ask where the water came in, whether drainage outside has been improved, and whether moisture-resistant materials make sense for that room. Fixing the cause first keeps the same room from flooding again.',
            ],
            [
                'h2' => 'Nearby Areas We Serve',
            ],
            [
                'p' => [
                    'text' => 'The same crews also cover South San Francisco, San Bruno and Pacifica.',
                    'links' => [
                        [
                            'anchor' => 'South San Francisco',
                            'href' => '/south-san-francisco-ca',
                            'pos' => 46,
                        ],
                        [
                            'anchor' => 'San Bruno',
                            'href' => '/',
                            'pos' => 125,
                        ],
                        [
                            'anchor' => 'Pacifica',
                            'href' => '/pacifica-ca',
                            'pos' => 183,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Living on a Steep Lot: Water Damage Risks by Level',
            ],
            [
                'p' => 'Many Brisbane homes are built in layers down the hillside. Each level faces different risks.',
            ],
            [
                'h3' => 'Street-Level Garage',
            ],
            [
                'p' => 'The garage often sits right at street level, at the bottom of the driveway. It takes the first hit from street runoff and is where water heaters, washers and stored belongings usually are.',
            ],
            [
                'h3' => 'Lower Living Levels',
            ],
            [
                'p' => 'Rooms built into the slope have an uphill wall against soil. After long storms, water can seep through that wall or the slab, causing damp carpet, musty smells and mold.',
            ],
            [
                'h3' => 'Main and Upper Floors',
            ],
            [
                'p' => 'These levels are more exposed to wind-driven rain through roofs, windows and siding. Bathroom and kitchen leaks here can travel down into the levels below.',
            ],
            [
                'p' => 'Knowing which level is most at risk helps you decide where to put leak sensors, where to keep valuables, and where to check first after a storm.',
            ],
            [
                'h2' => 'Older Homes in Central Brisbane',
            ],
            [
                'p' => 'Central Brisbane has many homes from the middle of the last century, along with newer construction mixed in. Older homes may still have original galvanized supply lines, cast iron drains and aging sewer laterals. Signs like low water pressure, rusty water, slow drains and recurring small leaks are worth a plumber\'s attention before something fails. If a pipe does burst, shut off the main valve right away and call for extraction and drying.',
            ],
            [
                'h2' => 'Apartments and Multi-Unit Buildings in Brisbane',
            ],
            [
                'p' => 'Brisbane has a number of small apartment buildings and multi-unit homes. In these, a leak in an upper unit can reach units below, and a backup in a shared sewer line can affect several ground-floor units. The crew checks every affected unit, dries each one, and keeps separate records for owners, tenants and property managers.',
            ],
            [
                'h2' => 'Safety First on Steep Properties',
            ],
            [
                'p' => 'Steep stairs, wet decks and slippery driveways are real hazards during and after storms. If reaching a flooded garage or lower level means walking down wet outdoor stairs in the dark, wait for the crew or for daylight. Never walk into standing water where electrical outlets or appliances may be submerged. Your safety comes before any belongings. When the crew arrives, they bring lighting and equipment to work safely on steep sites and in tight lower levels.',
            ],
            [
                'h2' => 'Call for Water Damage Restoration in Brisbane',
            ],
            [
                'p' => 'When the mountain sends water your way, act fast. For water damage restoration in Brisbane and any water damage repair Brisbane CA homes and businesses need, call (650) 822-6798. A crew is dispatched immediately anywhere in 94005.',
            ],
        ],
        'eyebrow' => 'WATER DAMAGE RESTORATION • BRISBANE, CALIFORNIA',
    ],
    '/resources/san-bruno-sewer-lateral-inspection' => [
        'type' => 'blog',
        'kind' => 'blog',
        'h1' => 'San Bruno Sewer Lateral Inspection: What Home Sellers and Buyers Should Know',
        'meta' => [
            'title' => 'San Bruno Sewer Lateral Inspection: Guide for Sellers & Buyers',
            'description' => 'How San Bruno\'s point-of-sale sewer lateral inspection works, who pays, and how it ties to sewage backups. Questions? Call (650) 822-6798.',
        ],
        'blocks' => [
            [
                'p' => 'If you are selling a home in San Bruno, there is one requirement that catches many owners off guard: the point-of-sale sewer lateral inspection. It can add time and cost to a sale, and if the lateral fails, it can lead to sewage backups long before you ever list the house. This guide explains the rule in plain language, what it means for owners, and how it connects to the sewage backups our crews clean up.',
            ],
            [
                'h2' => 'Do you need a sewer lateral inspection to sell a home in San Bruno?',
            ],
            [
                'p' => 'Yes. San Bruno requires a sewer lateral inspection when a property is sold. If the lateral is defective, it must be repaired or replaced, and the owner covers the cost.',
            ],
            [
                'p' => 'The city began enforcing this point-of-sale requirement on May 8, 2015. It is part of San Bruno\'s effort to reduce sewage overflows and stop rainwater and groundwater from leaking into the sewer system through cracked private pipes. Always check the City of San Bruno Public Works page for the current process and forms before you list.',
            ],
            [
                'h2' => 'What Is a Sewer Lateral?',
            ],
            [
                'p' => 'A sewer lateral is the private pipe that carries wastewater from your house to the public sewer main, usually under the street. Everything from your toilets, sinks, showers and washing machine flows through it. In San Bruno, the property owner is responsible for maintaining, repairing and replacing the private lateral.',
            ],
            [
                'p' => 'In older homes, laterals are often:',
            ],
            [
                'ul' => [
                    'Clay pipe, which cracks and lets roots in at the joints',
                    'Cast iron, which corrodes and develops holes over time',
                    'Orangeburg or other early materials that deform and collapse',
                ],
            ],
            [
                'p' => 'Many San Bruno homes were built in the 1940s through the 1960s, so a large share of laterals in the city are now 60 or more years old.',
            ],
            [
                'h2' => 'How the Point-of-Sale Process Generally Works',
            ],
            [
                'p' => 'The exact steps come from the city, but the process usually looks like this:',
            ],
            [
                'ul' => [
                    'The lateral is inspected, typically with a video camera run through the pipe from a cleanout',
                    'The video is reviewed for cracks, roots, offset joints, sags and breaks',
                    'If the lateral passes, the owner receives documentation of compliance',
                    'If it fails, the lateral must be repaired or replaced before or as part of the sale',
                    'In some cases, the city allows a time extension with a deposit placed in escrow so the work can be finished after closing',
                ],
            ],
            [
                'p' => 'The city\'s code notes that owners remain responsible for the full cost of compliance, which may be more than any escrow deposit. Buyers and sellers usually negotiate who pays as part of the sale.',
            ],
            [
                'h2' => 'How Much Does Sewer Lateral Work Cost?',
            ],
            [
                'p' => 'Costs vary widely with the length of the lateral, its depth, whether it runs under a driveway or tree, and the repair method. A simple spot repair costs far less than a full replacement. Trenchless methods such as pipe bursting or lining can reduce digging but are not right for every pipe. Get written quotes from more than one plumbing contractor, and ask exactly what each quote includes, such as permits, cleanouts and surface restoration.',
            ],
            [
                'h2' => 'Why a Bad Lateral Matters Even If You Are Not Selling',
            ],
            [
                'p' => 'A defective lateral is not just a paperwork problem. It is one of the most common causes of sewage backups in San Bruno homes. Roots grow into cracks, catch paper and debris, and eventually block the line. When that happens, wastewater has nowhere to go and comes back up through the lowest drain in the house: a basement floor drain, a ground-floor shower or a toilet.',
            ],
            [
                'p' => 'Warning signs of a failing lateral:',
            ],
            [
                'ul' => [
                    'Gurgling toilets or drains',
                    'Several fixtures draining slowly at the same time',
                    'Water backing up in a shower when the washing machine drains',
                    'Sewer odors in the house or yard',
                    'Unusually green or soggy patches in the yard above the line',
                ],
            ],
            [
                'p' => 'If you see these signs, have the line inspected before it backs up.',
            ],
            [
                'h2' => 'What to Do If Sewage Backs Up Into Your Home',
            ],
            [
                'ul' => [
                    'Stop using water in the house: no flushing, laundry or showers',
                    'Keep everyone, especially children and pets, away from the area',
                    'Do not touch sewage with bare hands',
                    'Turn off power to the area if you can reach the panel safely',
                    'Call a plumber to clear the line',
                    'Call (650) 822-6798 for cleanup',
                ],
            ],
            [
                'p' => [
                    'text' => 'Sewage is Category 3 water. Carpet, pad, drywall and other porous materials it touched need to be removed, and everything else must be cleaned and disinfected before drying. Details on how that works are on the sewage backup cleanup page.',
                    'links' => [
                        [
                            'anchor' => 'sewage backup cleanup',
                            'href' => '/sewage-backup-cleanup',
                            'pos' => 238,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Backwater Valves: A Simple Layer of Protection',
            ],
            [
                'p' => 'A backwater valve lets wastewater flow out of the house but stops it from flowing back in. If your home sits low, has had backups before, or has a basement or ground-floor drains, ask your plumber whether a backwater valve makes sense when the lateral is repaired or replaced.',
            ],
            [
                'h2' => 'Tips for Sellers',
            ],
            [
                'ul' => [
                    'Schedule the lateral inspection early so a failed result does not delay closing',
                    'Keep copies of the video and report',
                    'Get more than one quote for any repair',
                    'Talk to your agent about how the work and costs will be handled in the sale',
                ],
            ],
            [
                'h2' => 'Tips for Buyers',
            ],
            [
                'ul' => [
                    'Ask for the lateral inspection video and report',
                    'Confirm whether repairs are done before closing or handled with an escrow deposit',
                    'Ask whether the home has had past sewage backups and how they were cleaned up',
                    'Look for signs of past water damage in the lowest floor, crawl space or basement',
                ],
            ],
            [
                'h2' => 'Frequently Asked Questions',
            ],
            [
                'faq' => [
                    'q' => 'Who is responsible for the sewer lateral in San Bruno?',
                    'a' => [
                        'The property owner is responsible for the private lateral from the house to the public sewer main.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'When did San Bruno start requiring point-of-sale inspections?',
                    'a' => [
                        'The city began enforcing the requirement on May 8, 2015.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Can a lateral cause sewage to back up into the house?',
                    'a' => [
                        'Yes. Cracked, root-filled or collapsed laterals are a leading cause of sewage backups in older homes.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Does homeowners insurance cover sewer backups?',
                    'a' => [
                        'Many policies exclude sewer backup unless you have a specific endorsement. Check your policy.',
                    ],
                ],
            ],
            [
                'h2' => 'Need Help After a Sewage Backup?',
            ],
            [
                'p' => 'If a failing lateral has already sent sewage into your home, call (650) 822-6798. A crew is dispatched immediately to clean up, disinfect and dry the area. Learn more about sewage backup cleanup in San Bruno.',
            ],
        ],
        'crumb' => 'Sewer Lateral Inspection',
    ],
    '/resources/belle-air-storm-flood-checklist' => [
        'type' => 'guide',
        'kind' => 'storm',
        'h1' => 'Belle Air Storm Flooding Checklist: Before, During and After',
        'meta' => [
            'title' => 'Belle Air Flooding: Storm Checklist for San Bruno Homes',
            'description' => 'A practical before, during and after storm checklist for Belle Air and low-lying San Bruno homes. Flood help 24/7 at (650) 822-6798.',
        ],
        'blocks' => [
            [
                'p' => 'Belle Air sits in one of the lowest parts of San Bruno, close to SFO and the last stretch of San Bruno Creek before it reaches the Bay. When heavy rain lines up with a high tide, the creek cannot drain well, and water can back up into streets, garages and homes. This checklist walks through what to do before a storm, while it is happening, and after the water goes down.',
            ],
            [
                'h2' => 'Why does Belle Air flood more than other parts of San Bruno?',
            ],
            [
                'p' => 'Belle Air is low and flat, near where San Bruno Creek meets the Bay. During heavy rain and high tides, creek water and storm drains back up into the neighborhood.',
            ],
            [
                'p' => 'Stormwater from much of San Bruno drains toward San Bruno Creek. The creek runs past highways, the airport and rail lines before reaching a tide gate at the Bay. When the tide is high, that gate limits how fast water can leave. Add a long winter storm, and water has nowhere to go but back up through low storm drains and onto streets like those near 7th Avenue and around SR-380. Regional agencies, including OneShoreline, are working on long-term improvements, but in the meantime, preparation at home makes a real difference.',
            ],
            [
                'h2' => 'Before Storm Season: The Prep Checklist',
            ],
            [
                'p' => 'Do these in the fall, before the first big storm:',
            ],
            [
                'ul' => [
                    'Clear gutters and downspouts, and make sure downspouts carry water away from the house',
                    'Clear leaves and debris from the storm drain in front of your home',
                    'Move valuables, documents and electronics off garage floors and onto shelves',
                    'Raise appliances in the garage on blocks or platforms where possible',
                    'Test your sump pump if you have one, and get a battery backup',
                    'Check weatherstripping at the bottom of garage and exterior doors',
                    'Make a list of important phone numbers, including (650) 822-6798 for water damage help',
                    'Know where your main water shutoff and electrical panel are',
                    'Read through your insurance policy and ask your agent about flood coverage',
                    'Take photos of your home and belongings for your records',
                ],
            ],
            [
                'h2' => 'Sandbags and Flood Barriers',
            ],
            [
                'p' => 'Sandbags work best when placed before water arrives. The city has offered sandbags behind Fire Station 51 at 555 El Camino Real; check the City of San Bruno\'s website before a storm for current locations and availability.',
            ],
            [
                'p' => 'How to place sandbags well:',
            ],
            [
                'ul' => [
                    'Fill bags about halfway so they lie flat',
                    'Place them in a row across doorways and garage doors, overlapping the ends',
                    'Stack in a pyramid if you need more height',
                    'Press each bag down firmly so there are no gaps',
                    'Put plastic sheeting behind the bags for a better seal',
                ],
            ],
            [
                'p' => 'Sandbags slow water down; they do not make a home waterproof. Keep valuables up high anyway.',
            ],
            [
                'h2' => 'When a Storm Warning Is Issued',
            ],
            [
                'ul' => [
                    'Check tide times along with the rain forecast; heavy rain at high tide is the highest risk',
                    'Move cars to higher ground if your street floods',
                    'Move belongings off ground floors and garage floors',
                    'Place sandbags at doors and garage openings',
                    'Charge phones and keep flashlights ready',
                    'Sign up for San Mateo County emergency alerts',
                ],
            ],
            [
                'h2' => 'During the Storm',
            ],
            [
                'ul' => [
                    'Stay out of floodwater; it can hide hazards and carries bacteria',
                    'Do not drive through flooded streets',
                    'If water starts entering the house, turn off power to affected areas only if you can reach the panel without standing in water',
                    'Unplug electronics on lower floors if it is safe',
                    'Avoid using sinks, toilets and washing machines if drains are backing up',
                    'Call 911 if you are in danger',
                ],
            ],
            [
                'h2' => 'After the Water Goes Down',
            ],
            [
                'p' => 'The first day after a flood matters most. Here is what to do:',
            ],
            [
                'ul' => [
                    'Wait until it is safe to enter, and keep power off in wet areas',
                    'Photograph and video everything before cleanup starts',
                    'Call (650) 822-6798 to start extraction and drying',
                    'Wear boots and gloves; floodwater is contaminated',
                    'Throw away food, medicine and cosmetics that touched floodwater',
                    'Do not use a household vacuum on water',
                    'Keep a record of everything you throw away',
                    'Contact your insurance company to start a claim',
                ],
            ],
            [
                'h2' => 'Why Floodwater Cleanup Is Different',
            ],
            [
                'p' => [
                    'text' => 'Water from outside is classified as Category 3, or black water. It can carry sewage, chemicals and bacteria. That means carpet, pad, upholstered furniture and drywall it touched usually need to be removed, and all surfaces need to be cleaned and disinfected before drying. Simply drying things out is not enough. More details are on the storm and flood damage page.',
                    'links' => [
                        [
                            'anchor' => 'storm and flood damage',
                            'href' => '/storm-flood-water-damage',
                            'pos' => 365,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Garages Take the Hit First',
            ],
            [
                'p' => [
                    'text' => 'In Belle Air and other low areas, garages are usually the first place water enters. Many hold water heaters, washers, dryers and stored belongings. After a flood, have gas appliances checked before using them, and dry the garage fully before putting things back. See flooded garage cleanup.',
                    'links' => [
                        [
                            'anchor' => 'flooded garage cleanup',
                            'href' => '/garage-in-law-unit-flooding',
                            'pos' => 290,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Frequently Asked Questions',
            ],
            [
                'faq' => [
                    'q' => 'Where can I get sandbags in San Bruno?',
                    'a' => [
                        'The city has offered sandbags behind Fire Station 51 at 555 El Camino Real. Check the city\'s website for current details before a storm.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Does homeowners insurance cover flooding in Belle Air?',
                    'a' => [
                        'Standard homeowners policies usually exclude outside flooding. Flood coverage is typically a separate policy. Ask your agent.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'When is flooding most likely?',
                    'a' => [
                        'During heavy winter storms that line up with high tides, usually between November and March.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'How soon should cleanup start?',
                    'a' => [
                        'As soon as it is safe. Mold can start within 24 to 72 hours, and contaminated water spreads bacteria the longer it sits.',
                    ],
                ],
            ],
            [
                'h2' => 'Need Help After a Storm?',
            ],
            [
                'p' => 'If storm water got into your Belle Air home, call (650) 822-6798. A crew is dispatched immediately to pump out water, clean and disinfect, and dry everything properly. Learn more about flood damage restoration in San Bruno.',
            ],
        ],
        'crumb' => 'Belle Air Storm Flood Checklist',
    ],
    '/resources/old-pipe-warning-signs-san-bruno' => [
        'type' => 'blog',
        'kind' => 'blog',
        'h1' => 'Warning Signs of Pipe Failure in 1950s San Bruno Homes',
        'meta' => [
            'title' => 'Pipe Leak Warning Signs in 1950s San Bruno Homes',
            'description' => 'Learn the warning signs of failing galvanized and cast iron pipes in older San Bruno homes. Burst pipe? Call (650) 822-6798 24/7.',
        ],
        'blocks' => [
            [
                'p' => 'The typical San Bruno house was built in the late 1950s, and more than half of the city\'s homes date from the 1940s through the 1960s. Many still have some of their original plumbing. Those pipes have done their job for decades, but they do not last forever. This guide covers the warning signs that pipes in an older San Bruno home may be close to failing, and what to do before a small problem turns into a burst pipe.',
            ],
            [
                'h2' => 'How do you know if 1950s pipes in a San Bruno home are failing?',
            ],
            [
                'p' => 'Look for low water pressure, rusty or discolored water, frequent small leaks, stains on walls or ceilings, a rising water bill, and noisy or banging pipes.',
            ],
            [
                'p' => 'Pipe failure usually gives warnings before it becomes an emergency. The trouble is that most of these signs are easy to ignore or blame on something else. If you notice two or more of them at the same time, it is worth having a plumber take a look.',
            ],
            [
                'h2' => 'What Kind of Pipes Does Your Home Have?',
            ],
            [
                'h3' => 'Galvanized Steel',
            ],
            [
                'p' => 'Galvanized steel was the standard for water supply lines in homes built before the 1960s. It is steel coated with zinc to slow rust. Over 50 to 70 years, the coating wears away, the steel rusts from the inside, and the pipe narrows and weakens. Galvanized pipes are dull gray, and a magnet will stick to them.',
            ],
            [
                'h3' => 'Copper',
            ],
            [
                'p' => 'Copper became common from the 1960s onward. It lasts longer than galvanized but can develop pinhole leaks, especially near fittings or where water is more aggressive. Copper is reddish-brown and a magnet will not stick.',
            ],
            [
                'h3' => 'Cast Iron Drain Lines',
            ],
            [
                'p' => 'Many older homes have cast iron drain and waste lines. They are heavy and durable but crack and corrode over time, especially at the bottom of horizontal runs.',
            ],
            [
                'h3' => 'Clay Sewer Laterals',
            ],
            [
                'p' => 'The pipe from the house to the city sewer is often clay in older homes. Roots get into the joints, and the pipe cracks or shifts.',
            ],
            [
                'h3' => 'Mixed Systems',
            ],
            [
                'p' => 'Many San Bruno homes have a mix: original galvanized in some places, copper or PEX where repairs were made. Where different metals meet, corrosion can speed up.',
            ],
            [
                'h2' => 'Ten Warning Signs Your Pipes Are Failing',
            ],
            [
                'ul' => [
                    'Low water pressure in several fixtures, especially on the hot side',
                    'Brown, yellow or rusty water when you first turn on a tap',
                    'Small leaks that keep coming back in different places',
                    'Water stains or bubbling paint on walls and ceilings',
                    'A musty smell from cabinets, closets or the crawl space',
                    'A water bill that rises with no change in use',
                    'The sound of running water when everything is off',
                    'Banging, rattling or whistling pipes',
                    'Visible rust or white crust on exposed pipes in the garage or crawl space',
                    'Slow drains or gurgling in several fixtures at once',
                ],
            ],
            [
                'h2' => 'Where to Look in Your Home',
            ],
            [
                'h3' => 'The Crawl Space',
            ],
            [
                'p' => 'If your home is raised, the crawl space is where most supply and drain lines run. Look with a flashlight for rust, drips, damp soil and white mineral buildup on fittings.',
            ],
            [
                'h3' => 'The Garage',
            ],
            [
                'p' => 'The main water line often enters through the garage, along with the water heater connections. Look for rust and moisture around valves and fittings.',
            ],
            [
                'h3' => 'Under Sinks',
            ],
            [
                'p' => 'Check under kitchen and bathroom sinks for drips, stains and swollen cabinet bottoms.',
            ],
            [
                'h3' => 'Around the Water Heater',
            ],
            [
                'p' => 'Corroded fittings, rust at the base of the tank, or water in the drain pan are warning signs.',
            ],
            [
                'h3' => 'The Water Meter',
            ],
            [
                'p' => 'Turn off everything in the house and watch the meter for 30 to 60 minutes. If it moves, water is leaking somewhere.',
            ],
            [
                'h2' => 'Repair or Repipe?',
            ],
            [
                'p' => 'If you have one leak in an otherwise healthy system, a spot repair may be fine. If you have repeated leaks, rusty water and low pressure, a plumber may recommend repiping the house. That decision depends on your plumbing, budget and plans for the home. A few questions to ask a plumber:',
            ],
            [
                'ul' => [
                    'How much of the original galvanized is still in the house?',
                    'What is the condition of the main line from the meter?',
                    'Would replacing just the worst sections make sense for now?',
                    'What material would you use, and why?',
                    'Is the sewer lateral in good shape too?',
                ],
            ],
            [
                'h2' => 'What Happens When an Old Pipe Bursts',
            ],
            [
                'p' => 'When a weak pipe finally fails, it can release several gallons per minute until the water is shut off. In a crawl space, water soaks the soil and framing. Inside a wall, it soaks insulation and drywall. Above a ceiling, it brings drywall down. Fast action limits the damage:',
            ],
            [
                'ul' => [
                    'Shut off the main water valve',
                    'Turn off power to wet areas if it is safe',
                    'Move belongings out of the way',
                    'Take photos',
                    'Call (650) 822-6798 for extraction and drying',
                ],
            ],
            [
                'p' => [
                    'text' => 'See what happens next on the burst pipe water damage page.',
                    'links' => [
                        [
                            'anchor' => 'burst pipe water damage',
                            'href' => '/burst-pipe-water-damage',
                            'pos' => 58,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Hidden Leaks Under Floors',
            ],
            [
                'p' => [
                    'text' => 'Some older homes have supply lines in or under concrete slabs. Leaks there show up as warm spots on the floor, cracked tile or cupping hardwood. See the slab leak and hidden leak page.',
                    'links' => [
                        [
                            'anchor' => 'slab leak and hidden leak',
                            'href' => '/slab-leak-hidden-leak-water-damage',
                            'pos' => 184,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Frequently Asked Questions',
            ],
            [
                'faq' => [
                    'q' => 'How long do galvanized pipes last?',
                    'a' => [
                        'Typically 40 to 70 years, depending on water quality and installation. Many in San Bruno are at or past that range.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Is rusty water dangerous?',
                    'a' => [
                        'Rust itself is mainly a sign of corroding pipes. If you have concerns about water quality, talk to a plumber and check with your water provider.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Should I replace galvanized pipes before selling?',
                    'a' => [
                        'It depends on their condition and your plans. Some buyers and inspectors flag galvanized pipes, so many sellers get a plumber\'s evaluation first.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Does insurance cover a burst pipe?',
                    'a' => [
                        'Sudden bursts are often covered. Long-term leaks and the cost of replacing old pipes are often excluded. Check your policy.',
                    ],
                ],
            ],
            [
                'h2' => 'Had a Pipe Burst Already?',
            ],
            [
                'p' => 'If an old pipe has already failed in your San Bruno home, call (650) 822-6798. A crew is dispatched immediately for extraction and drying. Learn more about burst pipe water damage in San Bruno.',
            ],
        ],
        'crumb' => 'Warning Signs of Pipe Failure',
    ],
    '/resources/peninsula-fog-mold-prevention' => [
        'type' => 'blog',
        'kind' => 'blog',
        'h1' => 'How Peninsula Fog Leads to Mold and How to Prevent It',
        'meta' => [
            'title' => 'Fog and Mold: Moisture Control for San Bruno & Pacifica Homes',
            'description' => 'How Peninsula fog leads to indoor mold in San Bruno and Pacifica homes, and simple ways to prevent it. Mold help: (650) 822-6798.',
        ],
        'blocks' => [
            [
                'p' => 'If you live in the foggier parts of San Bruno, Pacifica, South San Francisco or Daly City, you already know the feeling: cool, damp air that hangs around for days, windows that fog up on the inside, closets that smell a little musty. That moisture is part of life on the Peninsula, and it is also one of the main reasons mold shows up in local homes. This guide explains how fog contributes to indoor mold and what you can do about it.',
            ],
            [
                'h2' => 'Does coastal fog cause mold inside San Bruno and Pacifica homes?',
            ],
            [
                'p' => 'Fog alone rarely causes mold, but it keeps indoor humidity high. When humid air meets cold walls, windows or crawl spaces, condensation forms and mold can grow.',
            ],
            [
                'p' => 'Mold needs three things: moisture, something to eat such as drywall paper, wood or dust, and time. Fog provides a steady supply of moisture. In the foggy northern and western parts of San Bruno, and almost everywhere in Pacifica, outdoor humidity stays high for much of the year. That humid air gets inside through vents, open windows, doors and crawl spaces. When it touches a surface colder than the air, such as an exterior wall in a closet or a single-pane window, it condenses into water. Do that day after day, and you have mold.',
            ],
            [
                'h2' => 'Where Fog-Related Mold Shows Up',
            ],
            [
                'h3' => 'Closets on Exterior Walls',
            ],
            [
                'p' => 'Closets are closed, dark and often against cold outside walls. Clothes and boxes block airflow. Mold commonly shows up on the back wall, behind hanging clothes, and on shoes and bags.',
            ],
            [
                'h3' => 'Window Sills and Frames',
            ],
            [
                'p' => 'Condensation on windows runs down onto sills and frames, especially older aluminum or single-pane windows.',
            ],
            [
                'h3' => 'Bathrooms',
            ],
            [
                'p' => 'Showers add moisture to air that is already humid. Without a good fan, ceilings and corners grow mold.',
            ],
            [
                'h3' => 'Behind Furniture',
            ],
            [
                'p' => 'Furniture pushed tight against exterior walls traps cool, damp air behind it.',
            ],
            [
                'h3' => 'Crawl Spaces',
            ],
            [
                'p' => 'Vents let marine air under the house, and the soil holds moisture. Joists and subfloor can grow mold even without a leak.',
            ],
            [
                'h3' => 'Garages and Lower Levels',
            ],
            [
                'p' => 'Unheated garages and rooms built into hillsides stay cool and damp, making them prime spots for mold.',
            ],
            [
                'h2' => 'Ideal Indoor Humidity on the Peninsula',
            ],
            [
                'p' => 'Most homes do best with indoor relative humidity between about 30 and 50 percent. Above 60 percent for long stretches, mold growth becomes much more likely. An inexpensive digital hygrometer from a hardware store tells you where your home stands. Check a few rooms, including a closet and a bathroom.',
            ],
            [
                'h2' => 'Ten Ways to Prevent Fog-Related Mold',
            ],
            [
                'ul' => [
                    'Run bathroom fans during showers and for at least 30 minutes after',
                    'Use a kitchen range hood that vents outside when cooking',
                    'Run a dehumidifier in closets, lower levels and rooms that feel damp, and empty or drain it regularly',
                    'Keep furniture a few inches away from exterior walls',
                    'Leave closet doors open when you can, and do not overpack closets',
                    'Wipe condensation off windows in the morning',
                    'Keep the home gently heated in winter; cold rooms collect more condensation',
                    'Check the crawl space for moisture and make sure vents and vapor barriers are in good shape',
                    'Fix leaks right away and dry wet areas within 24 hours',
                    'Avoid drying laundry indoors without ventilation',
                ],
            ],
            [
                'h2' => 'Dehumidifiers: What to Know',
            ],
            [
                'p' => 'A dehumidifier is one of the best tools for foggy homes. A few tips:',
            ],
            [
                'ul' => [
                    'Choose a size rated for the room or level you want to dry',
                    'Set it to around 45 to 50 percent humidity',
                    'Use a continuous drain hose if possible so it does not shut off when full',
                    'Clean the filter regularly',
                    'Place it where air can circulate, not tight against a wall',
                ],
            ],
            [
                'h2' => 'When Water Damage and Fog Combine',
            ],
            [
                'p' => [
                    'text' => 'Fog alone usually causes surface mold that can be managed. The bigger problem comes when there is also a leak, a flood or storm water. Wet materials in humid coastal air dry very slowly. That is why water damage on the Peninsula has to be dried mechanically with dehumidifiers and checked with moisture meters, not left to air dry. Learn more on the structural drying page.',
                    'links' => [
                        [
                            'anchor' => 'structural drying',
                            'href' => '/structural-drying',
                            'pos' => 373,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'When to Call for Mold Remediation',
            ],
            [
                'p' => 'Small spots of surface mold on a window sill or tile grout can often be cleaned by a homeowner. Call for help when:',
            ],
            [
                'ul' => [
                    'Mold covers more than a small patch',
                    'Mold keeps coming back after cleaning',
                    'There is a musty smell but you cannot find the source',
                    'Mold appears after a leak, flood or sewage backup',
                    'Someone in the home has asthma, allergies or a weak immune system',
                ],
            ],
            [
                'p' => [
                    'text' => 'See mold remediation for how the process works.',
                    'links' => [
                        [
                            'anchor' => 'mold remediation',
                            'href' => '/mold-remediation',
                            'pos' => 21,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Pacifica Homes Face Extra Challenges',
            ],
            [
                'p' => [
                    'text' => 'Pacifica sits right on the ocean, so humidity is high almost all year. Homes there benefit from running dehumidifiers more often and from checking crawl spaces after every major storm. See water damage restoration in Pacifica.',
                    'links' => [
                        [
                            'anchor' => 'Pacifica',
                            'href' => '/pacifica-ca',
                            'pos' => 226,
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Frequently Asked Questions',
            ],
            [
                'faq' => [
                    'q' => 'Why do my windows fog up on the inside?',
                    'a' => [
                        'Warm, humid indoor air meets the cold glass and condenses. Better ventilation and lower indoor humidity reduce it.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Can I just bleach mold?',
                    'a' => [
                        'Bleach can lighten surface mold on hard surfaces but does not fix the moisture problem or reach mold inside porous materials.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Should I close crawl space vents?',
                    'a' => [
                        'It depends on your home. Some crawl spaces do better sealed and dehumidified. Ask a professional before making changes.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'How fast can mold grow after a leak?',
                    'a' => [
                        'Within 24 to 72 hours on wet materials, faster in humid coastal air.',
                    ],
                ],
            ],
            [
                'h2' => 'Need Help With Mold or Moisture?',
            ],
            [
                'p' => 'If you have mold after a leak or water damage, call (650) 822-6798. A crew is dispatched immediately to find the moisture, contain the mold and dry everything out. Learn more about mold remediation in San Bruno.',
            ],
        ],
        'crumb' => 'Peninsula Fog and Mold',
    ],
    '/resources/water-damage-restoration-cost-san-bruno' => [
        'type' => 'guide',
        'kind' => 'cost',
        'h1' => 'How Much Does Water Damage Restoration Cost in San Bruno?',
        'meta' => [
            'title' => 'Water Damage Restoration Cost in San Bruno: Ranges & Factors',
            'description' => 'What affects water damage restoration cost in San Bruno, CA, with rough price ranges by job type. Get a clear scope: (650) 822-6798.',
        ],
        'blocks' => [
            [
                'p' => 'When water gets into your home, one of the first questions is how much it is going to cost. The honest answer is that it depends on a lot of things: how much area is wet, what kind of water it is, how long it sat, and what has to be removed and rebuilt. This guide breaks down the main cost factors and gives rough ranges so you know what to expect before you call.',
            ],
            [
                'h2' => 'What affects water damage restoration cost in San Bruno?',
            ],
            [
                'p' => 'The biggest factors are the size of the wet area, the water category, how long it sat, the materials affected, the number of drying days, and whether rebuilding is needed.',
            ],
            [
                'p' => 'Every job is different, which is why a written scope after an on-site inspection is the only way to get a real number for your home. Still, understanding what drives the price helps you make sense of the scope and plan ahead.',
            ],
            [
                'h2' => 'The Main Cost Factors',
            ],
            [
                'h3' => 'Size of the Affected Area',
            ],
            [
                'p' => 'More square footage means more extraction, more equipment and more materials to dry or replace. A single bathroom costs far less than a whole floor.',
            ],
            [
                'h3' => 'Water Category',
            ],
            [
                'p' => 'Clean water from a supply line is the least expensive to handle. Gray water from appliances costs more because it needs cleaning and sanitizing. Black water, including sewage and outside floodwater, costs the most because porous materials must be removed and everything disinfected.',
            ],
            [
                'h3' => 'How Long the Water Sat',
            ],
            [
                'p' => 'Water caught within hours usually means more materials can be dried and saved. Water left for days soaks deeper, can turn into Category 3, and may lead to mold.',
            ],
            [
                'h3' => 'Materials Affected',
            ],
            [
                'p' => 'Carpet and pad, hardwood, drywall, plaster, cabinets and insulation all dry and repair differently. Hardwood and cabinets cost more to dry or replace than carpet pad.',
            ],
            [
                'h3' => 'Where the Water Went',
            ],
            [
                'p' => 'Crawl spaces, wall cavities, ceilings and multiple floors take more work to dry than a single open room.',
            ],
            [
                'h3' => 'Drying Time',
            ],
            [
                'p' => 'Equipment is usually billed per day. In San Bruno\'s foggy, humid climate, drying can take a little longer than in drier inland areas.',
            ],
            [
                'h3' => 'Rebuild Work',
            ],
            [
                'p' => 'Mitigation, meaning extraction, removal and drying, is one part of the cost. Putting back drywall, flooring, cabinets and paint is a separate part that can equal or exceed it.',
            ],
            [
                'h2' => 'Rough Cost Ranges in the San Bruno Area',
            ],
            [
                'p' => 'The ranges below are rough estimates for mitigation work only, before rebuild, and are meant to help you plan. Your actual cost depends on the factors above and is confirmed in a written scope.',
            ],
            [
                'h3' => 'Small Clean Water Leak (One Room)',
            ],
            [
                'p' => 'Often somewhere between $1,500 and $4,000 for extraction and drying.',
            ],
            [
                'h3' => 'Larger Clean Water Loss (Several Rooms)',
            ],
            [
                'p' => 'Often between $4,000 and $10,000, depending on area and materials.',
            ],
            [
                'h3' => 'Crawl Space Water Removal and Drying',
            ],
            [
                'p' => 'Often between $2,000 and $7,000, depending on how much water and how long it sat.',
            ],
            [
                'h3' => 'Sewage Backup Cleanup',
            ],
            [
                'p' => 'Often between $3,000 and $12,000 or more, because contaminated materials must be removed and everything disinfected.',
            ],
            [
                'h3' => 'Storm or Flood Water in Living Areas',
            ],
            [
                'p' => 'Often between $5,000 and $15,000 or more for mitigation, depending on depth and how many rooms are affected.',
            ],
            [
                'h3' => 'Mold Remediation',
            ],
            [
                'p' => 'Small contained areas often run between $1,500 and $5,000. Larger or hidden mold can cost significantly more.',
            ],
            [
                'p' => 'Rebuild work such as new drywall, flooring and cabinets is extra and varies widely with your finishes.',
            ],
            [
                'h2' => 'Mitigation vs Restoration: Two Parts of the Bill',
            ],
            [
                'p' => 'It helps to think of a water damage job in two phases:',
            ],
            [
                'ul' => [
                    'Mitigation: emergency response, extraction, removal of wet materials, drying and antimicrobial treatment',
                    'Restoration: repairs such as drywall, paint, flooring, cabinets and trim',
                ],
            ],
            [
                'p' => 'Insurance companies often look at these separately. Mitigation happens right away; restoration comes after everything is dry.',
            ],
            [
                'h2' => 'Will Insurance Pay?',
            ],
            [
                'p' => 'Most homeowners policies cover sudden and accidental water damage, such as a burst pipe or failed water heater, minus your deductible. Common exclusions include:',
            ],
            [
                'ul' => [
                    'Outside flooding, which usually requires separate flood coverage',
                    'Sewer backup, unless you have a specific endorsement',
                    'Long-term leaks and maintenance issues',
                    'Mold, except in some cases when it results from a covered loss',
                ],
            ],
            [
                'p' => 'Every policy is different. Good documentation, including photos, daily moisture readings and a detailed scope, makes the claim process smoother.',
            ],
            [
                'h2' => 'How to Keep Costs Down',
            ],
            [
                'ul' => [
                    'Act fast: shut off the water and call right away',
                    'Move belongings out of wet areas to reduce contents damage',
                    'Do not wait to see if it dries on its own; hidden moisture leads to mold',
                    'Ask what can be dried and saved instead of replaced',
                    'Keep receipts for any emergency purchases, such as fans or hotel stays',
                    'Fix the source so the same problem does not happen again',
                ],
            ],
            [
                'h2' => 'Why Cheap Is Not Always Cheaper',
            ],
            [
                'p' => 'A lower quote that skips moisture readings or leaves equipment for too few days can end up costing more if mold appears later or materials fail. Ask how drying will be measured and how the crew will decide when the job is done.',
            ],
            [
                'h2' => 'Frequently Asked Questions',
            ],
            [
                'faq' => [
                    'q' => 'Do I pay for the inspection?',
                    'a' => [
                        'Ask when you call. Policies vary, and you should know before anyone arrives.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Why is sewage cleanup so much more expensive?',
                    'a' => [
                        'Sewage is Category 3 water. Porous materials must be removed, everything must be disinfected, and workers need full protective gear.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Is drying equipment billed per day?',
                    'a' => [
                        'Usually, yes. Air movers and dehumidifiers are typically charged per unit per day until drying is complete.',
                    ],
                ],
            ],
            [
                'faq' => [
                    'q' => 'Will I get a written estimate?',
                    'a' => [
                        'You get a written scope before any major removal or rebuild work begins.',
                    ],
                ],
            ],
            [
                'h2' => 'Get a Clear Scope for Your Home',
            ],
            [
                'p' => [
                    'text' => 'The fastest way to know what your water damage will cost is an on-site inspection. Call (650) 822-6798 and a crew is dispatched immediately to stop the damage, measure the moisture and give you a clear plan. Learn more about water damage restoration in San Bruno.',
                    'links' => [
                        [
                            'anchor' => 'San Bruno',
                            'href' => '/',
                            'pos' => 263,
                        ],
                    ],
                ],
            ],
        ],
        'crumb' => 'Water Damage Restoration Cost',
    ],
];
