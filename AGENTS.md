# Working in this repository

Read this file before you change get.typo3.org. It holds the rules for text and
commits. `README.md` explains the setup.

`public/AGENTS.md` is a different file. It is a template that this site
publishes for TYPO3 projects. Its rules do not apply to this repository.

## One language

Every text in this repository is English: documents, comments, commit
messages, templates and the strings that a command prints. The readers of this
tree do not share a first language. One language keeps search terms, examples
and reviews on the same thing.

The rule applies to what you write into the tree, not to the conversation.
Answer the person in the language of the prompt, and write English into the
tree.

If you find text in another language, stop the current task. Translate the
text, commit the translation on its own, then continue.

## How a text is written

Every text follows ASD-STE100, Simplified Technical English, and the terse
rule.

| Rule | Limit |
|---|---|
| A sentence in a paragraph | 25 words |
| A sentence in an instruction: a list item, a table cell, a step | 20 words |
| A paragraph | 6 sentences, one topic |
| An instruction | One action, in the imperative. A condition stands before it. |
| Voice | Active. The subject does the work. |
| Tense | Simple present. Simple past only for a thing that happened once. |
| Necessity | `must` for a rule, `can` for an ability, `will` for a future fact |
| Words | One meaning per word: "make sure", not "ensure"; "use", not "utilize" |

The terse rule limits what a text says:

- Say a rule once, and link to it from other places.
- Cut what the code below already shows.
- Cut the story: what it was before, who asked, when it broke.
- Keep the reason. A rule without its reason is a preference.

Make the software or the command the subject: "The command writes the satis
file." Do not write "we". A claim names its boundary: the source, the versions
and what it leaves out. Do not use emoji.

A technical name keeps the spelling of its source: `typo3/cms-core`,
`composer ci:static`, `public/AGENTS.md`.

## Before a commit

Run the checks that CI runs:

```bash
composer ci:static
composer ci:tests
```

The functional tests need the database. In a DDEV installation, put `ddev`
before each command. `composer fix` applies the coding standards.

The tool dependencies in `tools/` have no lock file in git. Thus CI installs
the newest version of each tool. If a check is green on your machine but red in
CI, update the tools first: `composer tools:setup:update`.

## Fixtures in tests

The fixtures in `src/DataFixtures/` generate random data with Faker. Keep it
random: a test that passes with any data checks more than a test with one
data set.

If a test queries one specific record, the fixtures must keep that record as
a reference. Register it with `addReference()` under a constant of the fixture
class, for example `ReleaseFixtures::LATEST_SECURITY_RELEASE_SPRINT`. In the
test, read it with `getFixtureReference()` and compare the response with it.
Do not expect a random record to exist: a test that depends on chance fails
in some runs only.

## Committing

Stage only the files that you changed: `git add <path>`. Do not use
`git add .` or `git add -A`. The working tree can contain other work in
progress, and a sweep hides that work under a message that does not name it.

Commit your work in small parts. A part is complete when it stands on its own,
the checks are green over it, and a revert of it removes nothing else.

The subject line uses the TYPO3 prefix and a short sentence in the imperative:

| Prefix | Use |
|---|---|
| `[FEATURE]` | A new function for the users of the site or the API |
| `[BUGFIX]` | A correction of wrong behaviour |
| `[TASK]` | Maintenance: dependencies, refactoring, configuration, documentation |
| `[!!!]` | Put it before the type for a breaking change: `[!!!][TASK]` |

Example: `[BUGFIX] Calculate Composer Helper version titles from version state`.

The body explains why the change is necessary, in lines of 72 characters or
less. The code shows what changed.
