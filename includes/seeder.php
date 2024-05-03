<?php

#region Classes

class Project
{
    public $title = "";
    public $type = "";
    public $featured = false;
    public $available = false;

    public $shortDescription = "";
    public $longDescription = "";

    public $thumbnailSrc = "";
    public $videoLink = false;

    public $viewLink = "";
    public $viewMessage = "Open Project";
    public $repoLink = "";

    public $codeDescription = "";

    public function __construct($title, $type, $featured, $available,
                                $shortDescription,
                                $longDescription,
                                $thumbnailSrc, $videoLink,
                                $viewLink, $viewMessage, $repoLink,
                                $codeDescription)
    {
        $this->title = $title;
        $this->type = $type;
        $this->featured = $featured;
        $this->available = $available;
        
        $this->shortDescription = $shortDescription;
        $this->longDescription = $longDescription;

        $this->thumbnailSrc = $thumbnailSrc;
        $this->videoLink = $videoLink;

        $this->viewLink = $viewLink;
        $this->viewMessage = $viewMessage;
        $this->repoLink = $repoLink;

        $this->codeDescription = $codeDescription;
    }
}

class CodeSnippet
{
    public $projectId = 0;
    public $name = "";
    public $description = "";
    public $code = "";

    public function __construct($projectId, $name, $description, $code)
    {
        $this->projectId = $projectId;
        $this->name = $name;
        $this->description = $description;
        $this->code = $code;
    }
}

#endregion

#region Initial Seed Values

$initialProjects = [
    "enfabler" => new Project(
        "Enfabler", "game", true, true,
        "Explore dungeons, defeat monsters and thwart villains to earn your place as a hero. Will you answer the call?",
        "Follow the journey of a famed storyteller who is searching for the perfect hero for their next big story.  You play as aspiring heroes who have answered the call of adventure. Explore dungeons, defeat monsters and thwart villains to earn your place as a hero. Will you answer the call?",
        "Images/Enfabler.png", "https://www.youtube.com/embed/ih067YlZj24?si=Sk_3hSXb59XGTOYi&amp;controls=0&autoplay=1&mute=1&playsinline=1&playlist=ih067YlZj24&loop=1",
        "https://andrewjscott02.itch.io/enfabler", "Play Enfabler on Itch","https://github.com/andrewscott02/Enfabler",
        "a procedural dungeon crawler made with Unity and C#"
    ),
    "coa" => new Project(
        "Corruption of Arcana", "game", true, true,
        "Gather your cards, weapons and potions because the corruption is growing stronger. Push into the heart of the realm and find the source of this terrible plague.",
        "Gather your cards, weapons and potions because the corruption is growing stronger. Push into the heart of the realm and find the source of this terrible plague.  Traverse the world in this 2.5D tarot-themed RPG card combat deck builder. Find new items and discover new lands.  Anything is possible when fortune favours the bold.",
        "Images/CoA.png", "https://www.youtube.com/embed/r8M4nrsPlGo?si=FVnUo691n4NBjaYh&amp;controls=0&autoplay=1&mute=1&playsinline=1&playlist=r8M4nrsPlGo&loop=1",
        "https://moonsoon-games.itch.io/corruption-of-arcana-reshuffled", "Play Corruption of Arcana on Itch","",
        "an tarot-themed RPG deckbuilder made with Unity and C#"
    ),
    "creak" => new Project(
        "Creak", "game", false, true,
        "Creak is a 2D platformer where you can only see through sound. Collide your character with obstacles to create sound waves that allow you to see.", "Creak is a 2D platformer where you can only see through sound. Collide your character with obstacles to create sound waves that allow you to see.",
        "Images/Creak.png", false,
        "https://andrewjscott02.itch.io/creak", "Play Creak on Itch","",
        "a 2D platform-puzzler made with Unity and C#"
    ),
    "overkill" => new Project(
        "Overkill", "game", false, true,
        "Overkill is a turn-based game inspired by the settings of Doom and XCOM. But unlike those games, you play as the villains. Lead a raiding party of demons to take over the Earth for the forces of evil in this turn-based RPG with a twist.",
        "Overkill is a turn-based game inspired by the settings of Doom and XCOM. But unlike those games, you play as the villains. Lead a raiding party of demons to take over the Earth for the forces of evil in this turn-based RPG with a twist.  In Overkill, characters can only die when they take damage that exceeds their armour, otherwise it has no effect. Use actions to increase the damage you can deal or decrease their armour first before unleashing an attack that can one-shot them.",
        "Images/Overkill.png", false,
        "https://andrewjscott02.itch.io/overkill", "Play Overkill on Itch","",
        "a turn-based game made with Unity and C#"
    ),
    "godsent" => new Project(
        "Godsent", "game", false, true,
        "You are a nun granted powers by God to defeat the Seven Princes of Hell but you must decide how far you are willing to suffer for your faith or whether you will give into the allure of power.", "You are a nun granted powers by God to defeat the Seven Princes of Hell but you must decide how far you are willing to suffer for your faith or whether you will give into the allure of power.",
        "Images/Godsent.png", false,
        "https://eggchanted.itch.io/godsent", "Play Godsent on Itch","",
        "a small boss rush game made with Unity and C#"
    ),
    "javajump" => new Project(
        "JavaJump", "game", false, true,
        "A small browser game made using JavaScript where you must jump to avoid falling obstacles.",
        "A small browser game made using JavaScript where you must jump to avoid falling obstacles.",
        "Images/JavaJump.png", false,
        "javajump.php#BrowserGame", "Play JavaJump on my Website","",
        "a small browser platformer made using JavaScript",
    ),
    "nm-homepage" => new Project(
        "Netmatters Homepage", "project", false, true,
        "A recreation of the Netmatters Homepage using HTML, CSS, JavaScript and PHP", "A recreation of the Netmatters Homepage using HTML, CSS, JavaScript and PHP",
        "Images/NM-heroimage.jpg", false,
        "https://andrew-scott.netmatters-scs.co.uk/php-nm-homepage/", "Open Project","",
        "an assessment on the SCS course where I remade the Netmatters homepage using HTML, CSS, JavaScript and PHP"
    ),
    "imagegenerator" => new Project(
        "Random Image Generator", "project", false, true,
        "A random image generator that generates images from Lorem Picsum", "A random image generator that generates images from Lorem Picsum",
        "Images/Image-Generator.png", false,
        "https://andrewscott02.github.io/Random-Image-Generator", "Open Project","",
        "a random image generator that generates images from Lorem Picsum"
    ),
    "arduinocontroller" => new Project(
        "TTRPG Controller", "project", false, true,
        "An arduino project where you can place pieces on a physical board to move pieces in a digital game", "An arduino project where you can place pieces on a physical board to move pieces in a digital game",
        "Images/ArduinoController.webp", "https://www.youtube.com/embed/TVrhjMUS844?si=FVnUo691n4NBjaYh&amp;controls=0&autoplay=1&mute=1&playsinline=1&playlist=TVrhjMUS844&loop=1",
        "https://www.youtube.com/watch?v=TVrhjMUS844&t=80s", "Watch Video","",
        "an controller made using Unity, Arduino and C# where you can place pieces on a physical board to move pieces in a digital game", "An arduino project where you can place pieces on a physical board to move pieces in a digital game"
    ),
    "pmai" => new Project(
        "Player Modelling Companion AI", "project", false, true,
        "A companion AI that uses player modelling techniques to adapt to player actions and respond with synergistic behaviour to better collaborate with them.", "A companion AI that uses player modelling techniques to adapt to player actions and respond with synergistic behaviour to better collaborate with them.",
        "Images/PMAI.jpg", "https://www.youtube.com/embed/lme6oJXwc10?si=FVnUo691n4NBjaYh&amp;controls=0&autoplay=1&mute=1&playsinline=1&playlist=lme6oJXwc10&loop=1",
        "https://www.youtube.com/embed/lme6oJXwc10", "Watch Video","",
        "a companion AI made using Unity and C#, which uses player modelling techniques to adapt to player actions and respond with synergistic behaviour to better collaborate with them."
    ),
    "turncombat" => new Project(
        "Turn-Based Combat System", "project", false, true,
        "In my first programming project, I created a 2 player turn based game, modelled after TTRPG games. Players can take turns moving a character and casting spells.", "In my first programming project, I created a 2 player turn based game, modelled after TTRPG games. Players can take turns moving a character and casting spells.",
        "Images/TurnCombat.jpg", "https://www.youtube.com/embed/lg1MPgQ8eVY?si=FVnUo691n4NBjaYh&amp;controls=0&autoplay=1&mute=1&playsinline=1&playlist=lg1MPgQ8eVY&loop=1",
        "https://www.youtube.com/watch?v=lg1MPgQ8eVY&t=1s", "Watch Video","",
        "a turn-based combat system made using Unreal Engine 4"
    ),
    "visualfx" => new Project(
        "Visual FX Programming", "project", false, false,
        "Visual effects using custom shaders and procedural mesh elements.", "Visual effects using custom shaders and procedural mesh elements.",
        "Images/GraphicsImages.png", false,
        "", "Open Project","",
        "a project that uses custom shaders and procedural mesh elements to create various visual effects"
    )
];

$initialCodeSnippets = [
    #region Enfabler Code

    //Enfabler Combat Code
    new CodeSnippet("Enfabler", "Health", "Code that manages character or object health", '
        using System.Collections;
        using System.Collections.Generic;
        using UnityEngine;
        using Cinemachine;
        using Enfabler.Attacking;
        
        public class Health : MonoBehaviour, IDamageable, IHealable
        {
            [HideInInspector]
            public Animator animator;
            [HideInInspector]
            public ConstructPlayerModel modelConstructor;
        
            public SliderScript healthSlider;
            public Armour armourScript;
            CharacterCombat combat;
            public int maxHealth = 50;
            int currentHealth = 0; public int GetCurrentHealth() { return currentHealth; }
        
            public HitReactData hitReactData;
        
            BaseCharacterController controller;
        
            private void Start()
            {
                currentHealth = maxHealth;
                if (healthSlider != null)
                    healthSlider.ChangeSliderValue(currentHealth, maxHealth);
                combat = GetComponent<CharacterCombat>();
        
                controller = GetComponent<BaseCharacterController>();
                animator = GetComponent<Animator>();
                impulseSource = GetComponent<CinemachineImpulseSource>();
        
                HitReactionDelegate += HitReaction;
                killDelegate += Kill;
        
                armourScript = GetComponent<Armour>();
            }
        
            public MonoBehaviour GetScript()
            {
                return this;
            }
        
            [ContextMenu("Take10Damage")]
            public void Take10Damage()
            {
                Damage(GetComponent<CharacterCombat>(), 10, transform.position, transform.eulerAngles);
            }
        
            public E_DamageEvents Damage(ICanDealDamage attacker, int damage, Vector3 spawnPos, Vector3 spawnRot, E_AttackType attackType = E_AttackType.None)
            {
                MonoBehaviour attackerMono = attacker.GetScript();
                Vector3 dir = transform.position - attackerMono.transform.position;
                dir.Normalize();
        
                //Debug.Log(gameObject.name + " was hit");
        
                if (combat != null)
                {
                    if (combat.GetDodging() && attacker.HitDodged()) return E_DamageEvents.Dodge;
        
                    if (combat.parrying && attacker.HitParried(this))
                    {
                        if (hitReactData.parryFX != null) { Instantiate(hitReactData.parryFX, spawnPos, Quaternion.Euler(spawnRot)); }
                        ParryReaction();
                        combat.parriedDelegate(attacker);
                        return E_DamageEvents.Parry;
                    }
                    else if (combat.CanBlock() && attacker.HitBlocked(this))
                    {
                        if (hitReactData.blockFX != null) { Instantiate(hitReactData.blockFX, spawnPos, Quaternion.Euler(spawnRot)); }
                        HitReactionDelegate(damage, dir);
                        combat.blockedDelegate();
                        return E_DamageEvents.Block;
                    }
                }
        
                currentHealth -= damage;
        
                if (healthSlider != null)
                    healthSlider.ChangeSliderValue(currentHealth, maxHealth);
        
                if (modelConstructor != null)
                    modelConstructor.PlayerHit();
        
                if (CheckKill())
                {
                    Vector3 forceOrigin = attacker != null ? attackerMono.gameObject.transform.position : spawnPos;
                    killDelegate(forceOrigin, damage);
                    if (hitReactData.deathFX != null)
                    {
                        if (hitReactData.deathFXGO != null)
                            Instantiate(hitReactData.deathFX, hitReactData.deathFXGO.transform);
                        else
                            Instantiate(hitReactData.deathFX, spawnPos, Quaternion.Euler(spawnRot));
                    }
                }
                else
                {
                    HitReactionDelegate(damage, dir, attackType);
                    if (hitReactData.bloodFX != null)
                    {
                        Instantiate(hitReactData.bloodFX, spawnPos, Quaternion.Euler(spawnRot));
                    }
                }
        
                return E_DamageEvents.Hit;
            }
        
            public delegate void HitDelegate(int damage, Vector3 dir, E_AttackType attackType = E_AttackType.None);
            public HitDelegate HitReactionDelegate;
        
            void HitReaction(int damage, Vector3 dir, E_AttackType attackType = E_AttackType.None)
            {
                if (combat == null) { return; }
        
                combat.GotHit();
        
                if (animator != null && damage >= hitReactData.lightHitReactThreshold)
                {
                    combat.ForceEndAttack();
                    animator.SetBool("InHitReaction", true);
                    animator.SetTrigger(damage < hitReactData.heavyHitReactThreshold ? "HitReactLight" : "HitReactHeavy");
                    if (damage > hitReactData.heavyHitReactThreshold)
                    {
                        if (hitReactData.hitClip != null)
                            PlaySoundEffect(hitReactData.hitClip, hitReactData.hitVolume);
                    }
                }
                else
                {
                    combat.ResetAttack();
                }
        
                float impulseStrength = Mathf.Clamp(damage * hitReactData.hitImpulseMultiplier, 0, hitReactData.impulseMax);
                SpawnImpulse(impulseStrength);
                
                Slomo(hitReactData.hitSlomoScale, hitReactData.hitSlomoDuration);
            }
        
            void PlaySoundEffect(AudioClip clip, float volume = 1)
            {
                if (AudioManager.instance == null) return;
        
                AudioManager.instance.PlaySoundEffect(clip, volume);
            }
        
            void ParryReaction()
            {
                SpawnImpulse(hitReactData.parryImpulseStrength);
                Slomo(hitReactData.parrySlomoScale, hitReactData.parrySlomoDuration);
            }
        
            public void Heal(int heal)
            {
                currentHealth = Mathf.Clamp(currentHealth + heal, 0, maxHealth);
                if (healthSlider != null)
                    healthSlider.ChangeSliderValue(currentHealth, maxHealth);
            }
        
            public bool CheckKill()
            {
                return currentHealth <= 0;
            }
        
            public bool dying = false;
            public bool canPlayEndCombatSound = false;
        
            public delegate void KillDelegate(Vector3 attacker, int damage);
            public KillDelegate killDelegate;
        
            public void Kill(Vector3 attacker, int damage)
            {
                dying = true;
                SpawnImpulse(hitReactData.killImpulseStrength);
        
                //Debug.Log("Enemies left " + AIManager.instance.GetEnemiesInCombat());
                if (AIManager.instance.GetEnemiesInCombat() == 1 && canPlayEndCombatSound)
                {
                    if (hitReactData.hitClip != null)
                        PlaySoundEffect(hitReactData.hitClip, hitReactData.hitVolume * 2);
                    KillCamSlowMo();
                }
                else
                {
                    if (hitReactData.hitClip != null)
                        PlaySoundEffect(hitReactData.hitClip, hitReactData.hitVolume);
                    Slomo(hitReactData.killSlomoScale, hitReactData.killSlomoDuration);
                }
        
                if (combat != null)
                {
                    combat.ForceEndAttack();
                    combat.enabled = false;
                }
        
                if (controller != null)
                {
                    controller.Killed();
        
                    if (hitReactData.killRagdoll)
                    {
                        //Debug.Log(gameObject + "has controller");
                        ExplosiveForceData forcedata = new ExplosiveForceData()
                        {
                            explosiveForce = damage,
                            origin = attacker
                        };
        
                        controller.ActivateRagdoll(true, forcedata, !hitReactData.killAnim);
                        gameObject.name += " -- Dead";
                    }
                    else
                    {
                        controller.ChangeTags(true);
                    }
        
                    controller.enabled = false;
                }
        
                if (hitReactData.killAnim)
                {
                    controller.rb.constraints = RigidbodyConstraints.FreezeAll;
                    controller.enabled = false;
                    animator.SetTrigger("Death");
                }
        
                if (hitReactData.killDestroyTime >= 0)
                {
                    //Debug.Log(gameObject + "has no controller");
                    Destroy(this.gameObject, hitReactData.killDestroyTime);
                }
        
                if (healthSlider != null)
                    healthSlider.gameObject.SetActive(false);
            }
        
            public bool IsDead() { return dying; }
        
            CinemachineImpulseSource impulseSource;
        
            public void SpawnImpulse(float impulseStrength)
            {
                if (impulseSource == null) return;
        
                impulseSource.GenerateImpulseWithForce(impulseStrength);
            }
        
            public void Slomo(float slomoStrength, float slomoDuration)
            {
                if (TimeManager.instance == null) return;
        
                //Debug.Log("Set slow motion to " + slomoStrength.ToString());
                TimeManager.instance.SetTimeScale(slomoStrength, slomoDuration);
            }
        
            public void KillCamSlowMo()
            {
                //Debug.Log("kill cam slomo");
                Slomo(0.2f, 2f);
                CameraManager.instance.SetCombatCam(false, true);
                AudioManager.instance.ExploreMusicFade();
            }
        }
    '),
    new CodeSnippet("Enfabler", "Health Interfaces", "Interfaces that allow objects to be damaged and healed", '
        public interface IDamageable
        {
            MonoBehaviour GetScript();
            E_DamageEvents Damage(ICanDealDamage attacker, int damage, Vector3 spawnPos, Vector3 spawnRot, E_AttackType attackType = E_AttackType.None);
            bool CheckKill();
            void Kill(Vector3 attacker, int damage);
            bool IsDead();
        }
        
        public interface IHealable
        {
            MonoBehaviour GetScript();
            void Heal(int heal);
        }
    '),
    new CodeSnippet("Enfabler", "Hitbox Modifier", "Code for specific hitboxes that modifies incoming damage", '
        using Enfabler.Attacking;
        using System.Collections;
        using System.Collections.Generic;
        using UnityEngine;
        
        public class HitboxModifier : MonoBehaviour, IDamageable
        {
            public bool detachFromParent = false;
        
            //public int hitBoxHealth;
            public float damageModifier = 1;
        
            //public bool overrideImmunity = false;
            //public bool immune = false;
        
            public Health health;
        
            private void Start()
            {
                if (detachFromParent)
                    this.gameObject.transform.SetParent(null, true);
        
                HitReactionDelegate += HitReaction;
        
                health.killDelegate += Kill;
            }
        
            public bool CheckKill()
            {
                //Empty
                return false;
            }
        
            public delegate void HitDelegate(int damage, Vector3 dir, E_AttackType attackType = E_AttackType.None);
            public HitDelegate HitReactionDelegate;
        
            void HitReaction(int damage, Vector3 dir, E_AttackType attackType = E_AttackType.None)
            {
                //Empty Delegate
            }
        
            public E_DamageEvents Damage(ICanDealDamage attacker, int damage, Vector3 spawnPos, Vector3 spawnRot, E_AttackType attackType = E_AttackType.None)
            {
                if (attacker.GetScript().gameObject != health.gameObject)
                {
                    HitReactionDelegate((int)((float)damage * damageModifier), Vector3.zero, attackType);
                    return health.Damage(attacker, (int)((float)damage * damageModifier), spawnPos, spawnRot, attackType);
                }
        
                return E_DamageEvents.Dodge;
            }
        
            public MonoBehaviour GetScript()
            {
                return this;
            }
        
            public bool IsDead()
            {
                return false;
            }
        
            public void Kill(Vector3 attacker, int damage)
            {
                Destroy(gameObject);
            }
        }
    '),
    new CodeSnippet("Enfabler", "Health Threshold Events", "Code that triggers specific events when health reaches a certain threshold", '
        using System.Collections;
        using System.Collections.Generic;
        using UnityEngine;
        using Enfabler.Attacking;
        
        public class HealthThresholdEvent : MonoBehaviour
        {
            Health health;
            HitboxModifier hitBox;
        
            public int threshold = 0;
            int currentDamage = 0;
            public bool doOnce = false;
        
            // Start is called before the first frame update
            protected virtual void Start()
            {
                IDamageable damageable = GetComponent<IDamageable>();
        
                if (damageable == null)
                    return;
        
                MonoBehaviour mono = damageable.GetScript();
        
                health = mono as Health;
        
                hitBox = mono as HitboxModifier;
        
                AddDelegates();
            }
        
            protected void AddDelegates()
            {
                if (health != null)
                {
                    health.HitReactionDelegate += HitReaction;
                }
        
                if (hitBox != null)
                {
                    hitBox.HitReactionDelegate += HitReaction;
                }
            }
        
            protected void RemoveDelegates()
            {
                if (health != null)
                {
                    health.HitReactionDelegate -= HitReaction;
                }
        
                if (hitBox != null)
                {
                    hitBox.HitReactionDelegate -= HitReaction;
                }
            }
        
            private void OnDestroy()
            {
                RemoveDelegates();
            }
        
            void HitReaction(int damage, Vector3 dir, E_AttackType attackType = E_AttackType.None)
            {
                currentDamage += damage;
        
                if (currentDamage >= threshold)
                    ThresholdReached();
            }
        
            protected virtual void ThresholdReached()
            {
                currentDamage = 0;
        
                if (doOnce)
                    RemoveDelegates();
            }
        }
    '),
    new CodeSnippet("Enfabler", "Example: Teleport on Health Threshold", "Child class that extends the health threshold class to teleport the character when their health reaches a certain threshold", '
        using Enfabler.Attacking;
        using System.Collections;
        using System.Collections.Generic;
        using UnityEngine;
        
        public class TeleportOnThreshold : HealthThresholdEvent
        {
            public float yOffset = 1f;
            public float teleportRadius = 3f;
        
            public bool teleportAreaMoves = false;
            Vector3 teleportOrigin;
        
            protected override void Start()
            {
                base.Start();
                teleportOrigin = transform.position;
            }
        
            protected override void ThresholdReached()
            {
                base.ThresholdReached();
        
                if (HelperFunctions.GetRandomPoint(GetTeleportOrigin() - new Vector3(0, yOffset, 0), teleportRadius, 1f, 500, out Vector3 point))
                {
                    //Teleport
                    point.y += yOffset;
                    Debug.Log("Hitbox teleports to point " + point);
                    transform.position = point;
                }
                else
                {
                    //Teleport
                    point.y += transform.position.y;
                    Debug.Log("Hitbox teleports to point (failed) " + point);
                    transform.position = point;
                }
            }
        
            Vector3 GetTeleportOrigin()
            {
                if (teleportAreaMoves)
                    return transform.position;
        
                return teleportOrigin;
            }
        
            private void OnDrawGizmosSelected()
            {
                Gizmos.DrawWireSphere(GetTeleportOrigin(), teleportRadius);
            }
        }
    '),
    new CodeSnippet("Enfabler", "Phase", "Code that allows characters to phase through other characters and objects when using specific attacks", '
        using System.Collections;
        using System.Collections.Generic;
        using UnityEngine;
        using UnityEngine.AI;
        
        public class Phase : MonoBehaviour
        {
            int defaultLayer;
            public int phaseLayer;
        
            public Transform attach;
        
            public Object phaseEffect;
            public Object flashEffect;
            ParticleSystem phaseParticle;
        
            NavMeshObstacle navMeshObstacle;
            NavMeshAgent navMeshAgent;
        
            // Start is called before the first frame update
            void Start()
            {
                defaultLayer = gameObject.layer;
        
                CharacterCombat combat = GetComponent<CharacterCombat>();
                combat.phaseDelegate += ActivatePhase;
        
                navMeshObstacle = GetComponent<NavMeshObstacle>();
                navMeshAgent = GetComponent<NavMeshAgent>();
            }
        
            void ActivatePhase(bool activate)
            {
                //Debug.Log("Phasing: " + activate);
                gameObject.layer = activate ? phaseLayer : defaultLayer;
        
                StartParticles(activate);
        
                if (navMeshObstacle != null)
                    navMeshObstacle.enabled = !activate;
        
                if (navMeshAgent != null)
                    navMeshAgent.enabled = !activate;
            }
        
            void StartParticles(bool activate)
            {
                Transform flashSpawn = attach == null ? transform : attach;
                Instantiate(flashEffect, flashSpawn.position, flashSpawn.rotation);
        
                if (!activate)
                    return;
        
                if (phaseParticle == null)
                {
                    GameObject go = Instantiate(phaseEffect, attach == null ? transform : attach) as GameObject;
                    phaseParticle = go.GetComponent<ParticleSystem>();
                    return;
                }
        
                phaseParticle.gameObject.SetActive(true);
                phaseParticle.Simulate(0, true, true);
        
                phaseParticle.Play();
            }
        }
    '),
    //Enfabler AI Code
    new CodeSnippet("Enfabler", "Enemy Behaviour Tree", "Behaviour tree for enemies to determine their behaviours", '
        using System.Collections;
        using System.Collections.Generic;
        using UnityEngine;
        using BehaviourTrees;
        
        public class BasicBehaviourTree : BehaviourTree
        {
            protected override Node SetupTree()
            {
                //Debug.Log("Setting up basic BT for " + agent.name);
        
                Node root = new Selector(
        
                    BaseBehaviours.CastSpell(agent),
        
                    BaseBehaviours.AttackClosestTarget(agent, true),
        
                    //Checks if the closest enemy is within sight range and moves towards it if true
                    BaseBehaviours.MoveToClosestTarget(agent, agent.distanceAllowance, true),
                    //When pinged and out of combat, move towards player position
                    BaseBehaviours.FollowPing(agent, agent.GetPlayer()),
                    //If there are no targets, move to a random point in the roam radius
                    BaseBehaviours.RoamToRandomPoint(agent)
                    );
        
                return root;
            }
        }
    '),
    new CodeSnippet("Enfabler", "Ranged Enemy Behaviour Tree", "Behaviour tree for ranged enemies to keep their distance while attacking", '
        using System.Collections;
        using System.Collections.Generic;
        using UnityEngine;
        using BehaviourTrees;
        
        public class RangedBehaviourTree : BehaviourTree
        {
            protected override Node SetupTree()
            {
                //Debug.Log("Setting up basic BT for " + agent.name);
        
                Node root = new Selector(
        
                    BaseBehaviours.CastSpell(agent),
        
                    BaseBehaviours.AttackClosestTargetNoMoving(agent),
        
                    //Checks if the closest enemy is within sight range and moves at a range away from it
                    BaseBehaviours.MoveToRange(agent, 35f, false),
                    //If there are no targets, but the player is an ally, move to a point near the player
                    BaseBehaviours.FollowPing(agent, agent.GetPlayer()),
                    //If there are no targets, move to a random point in the roam radius
                    BaseBehaviours.RoamToRandomPoint(agent)
                    );
        
                return root;
            }
        }
    '),
    new CodeSnippet("Enfabler", "Base Behaviours", "Base Behaviours for common actions that are used in behaviour trees to avoid repetition", '
        using System.Collections;
        using System.Collections.Generic;
        using UnityEngine;
        
        namespace BehaviourTrees
        {
            public static class BaseBehaviours
            {
                #region Movement
        
                public static Selector MoveToSpawnPoint(AIController agent)
                {
                    return new Selector(
                        DefensiveAction(agent),
                        new Sequence(
                            new FindSpawnPoint(agent),
                            new MoveToDestination(agent, 6f, false, agent.distanceAllowance)
                            )
                        );
                }
        
                public static Selector RoamToRandomPoint(AIController agent)
                {
                    return new Selector(
                        DefensiveAction(agent),
                        new Sequence(
                            new FindPointRadius(agent),
                            new MoveToDestination(agent, 6f, false, agent.distanceAllowance)
                            )
                        );
                }
        
                public static Selector MoveToClosestTarget(AIController agent, float distance, bool sprinting)
                {
                    return new Selector(
                        DefensiveAction(agent),
                        new Sequence(
                            new GetClosestEnemy(agent),
                            new MoveToDestination(agent, 6f, sprinting, distance)
                            )
                        );
                }
        
                public static Selector MoveToRange(AIController agent, float radius, bool sprinting)
                {
                    return new Selector(
                        DefensiveAction(agent),
                        new Sequence(
                            new GetClosestEnemy(agent),
                            new FindPointOuterRadius(agent, radius),
                            new MoveToDestination(agent, 6f, sprinting, agent.distanceAllowance)
                            )
                        );
                }
        
                public static Selector FollowTarget(AIController agent, GameObject target, bool requireSameTeam)
                {
                    return new Selector(
                        DefensiveAction(agent),
                        new Sequence(
                            new FindPointNearTarget(agent, target, requireSameTeam),
                            new MoveToDestination(agent, Mathf.Infinity, true, agent.distanceAllowance)
                            )
                        );
                }
        
                public static Selector FollowPing(AIController agent, GameObject target)
                {
                    return new Selector(
                        DefensiveAction(agent),
                        new Sequence(
                            new FindPointNearPing(agent, target),
                            new MoveToDestination(agent, Mathf.Infinity, true, agent.distanceAllowance)
                            )
                        );
                }
        
                public static Selector RushToTarget(AIController agent, GameObject target)
                {
                    return new Selector(
                        DefensiveAction(agent),
                        new Sequence(
                            new GetClosestEnemyToTarget(agent, target),
                            new MoveToDestination(agent, 6f, true, agent.distanceAllowance),
                            new Attack(agent)
                            ),
                        new Sequence(
                            new GetClosestEnemyToTarget(agent, target),
                            new MoveToDestination(agent, 6f, true, agent.distanceAllowance)
                            )
                        );
                }
        
                public static Selector FlankTarget(AIController agent, ConstructPlayerModel model, float flankDistance, bool requireSameTeam, bool sprint)
                {
                    return new Selector(
                        DefensiveAction(agent),
                        new Sequence(
                            new GetModelNonTarget(agent, model),
                            new FlankToDestination(agent, model.modelCharacter.gameObject, flankDistance, requireSameTeam),
                            new MoveToDestination(agent, 6f, sprint, agent.distanceAllowance),
                            new Attack(agent)
                            ),
                        new Sequence(
                            new GetModelTarget(agent, model),
                            new FlankToDestination(agent, model.modelCharacter.gameObject, flankDistance, requireSameTeam),
                            new MoveToDestination(agent, 6f, sprint, agent.distanceAllowance),
                            new Attack(agent)
                            ),
                        new Sequence(
                            new GetModelTarget(agent, model),
                            new FlankToDestination(agent, model.modelCharacter.gameObject, flankDistance, requireSameTeam),
                            new MoveToDestination(agent, 6f, true, agent.distanceAllowance)
                            )
                        );
                }
        
                public static Selector InterceptTarget(AIController agent, ConstructPlayerModel model, float flankDistance, bool requireSameTeam, bool sprint)
                {
                    return new Selector(
                        DefensiveAction(agent),
                        new Sequence(
                            new GetModelNonTarget(agent, model),
                            new InterceptTarget(agent, model.modelCharacter.gameObject, flankDistance, requireSameTeam),
                            new MoveToDestination(agent, 6f, sprint, agent.distanceAllowance),
                            new Attack(agent)
                            ),
                        new Sequence(
                            new GetModelTarget(agent, model),
                            new InterceptTarget(agent, model.modelCharacter.gameObject, flankDistance, requireSameTeam),
                            new MoveToDestination(agent, 6f, sprint, agent.distanceAllowance),
                            new Attack(agent)
                            ),
                        new Sequence(
                            new GetModelTarget(agent, model),
                            new InterceptTarget(agent, model.modelCharacter.gameObject, flankDistance, requireSameTeam),
                            new MoveToDestination(agent, 6f, true, agent.distanceAllowance)
                            )
                        );
                }
        
                public static Selector IgnoreModelTargets(AIController agent, ConstructPlayerModel model, float range)
                {
                    return new Selector(
                        DefensiveAction(agent),
                        new Sequence(
                            new GetModelNonTarget(agent, model),
                            new MoveToDestination(agent, 6f, false, agent.distanceAllowance),
                            new GetClosestEnemy(agent, range),
                            new Attack(agent)
                            ),
                        new Sequence(
                            new GetModelNonTarget(agent, model),
                            new MoveToDestination(agent, 6f, true, agent.distanceAllowance)
                            )
                        );
                }
        
                #endregion
        
                #region Combative
        
                public static Sequence CastSpell(AIController agent)
                {
                    return new Sequence(
                        new GetValidSpell(agent),
                        new CastSpell(agent)
                        );
                }
        
                public static Selector AttackClosestTarget(AIController agent, bool sprinting)
                {
                    return new Selector(
                        DefensiveAction(agent),
                        new Sequence(
                            new IsTurn(agent),
                            new GetValidAttack(agent),
                            new GetClosestEnemyWithinAttack(agent),
                            new MoveToDestination(agent, 6f, sprinting, agent.distanceAllowance),
                            new Attack(agent)
                            ),
                        new Sequence(
                            new GetValidAttack(agent),
                            new GetClosestEnemyWithinAttack(agent),
                            new EnqueueAttack(agent),
                            BaseBehaviours.MoveToRange(agent, 35f, false)
                            )
                        );
                }
        
                public static Selector AttackClosestTargetNoMoving(AIController agent)
                {
                    return new Selector(
                        DefensiveAction(agent),
                        new Sequence(
                            new IsTurn(agent),
                            new GetValidAttack(agent),
                            new GetClosestEnemyWithinAttack(agent),
                            new Attack(agent)
                            ),
                        new Sequence(
                            new GetValidAttack(agent),
                            new GetClosestEnemyWithinAttack(agent),
                            new EnqueueAttack(agent)
                            )
                        );
                }
        
                public static Selector MoveToTargetWhileAttacking(AIController agent, GameObject target)
                {
                    return new Selector(
                        DefensiveAction(agent),
                        new Sequence(
                            new GetValidAttack(agent),
                            new GetClosestEnemyToTarget(agent, target),
                            new MoveToDestination(agent, 6f, false, agent.distanceAllowance),
                            new GetClosestEnemyWithinAttack(agent),
                            new Attack(agent)
                            )
                        );
                }
        
                public static Selector DefensiveAction(AIController agent)
                {
                    return new Selector(
                        new Selector(
                            new Sequence(
                                new CanParry(agent),
                                new Parry(agent)
                                ),
                            new Sequence(
                                new BeingAttacked(agent),
                                new Selector(
                                    new Sequence(
                                        new CanDodge(agent),
                                        new Dodge(agent, agent.distanceAllowance)
                                        ),
                                    new Sequence(
                                        new CanBlock(agent),
                                        new Block(agent)
                                        )
                                    )
                                )
                            )
                        );
                }
        
                #endregion
            }
        }
    '),
    //Enfabler Quests Code
    new CodeSnippet("Enfabler", "Quest Setup", "Code for the quest class and enums used to make quests", '
        using System.Collections;
        using System.Collections.Generic;
        using UnityEngine;

        namespace Enfabler.Quests
        {
            [CreateAssetMenu(fileName = "NewQuest", menuName = "Quests/Create Quest", order = 0)]
            public class Quest : ScriptableObject
            {
                #region Setup
        
                #region Variables
        
                [Header("Basic Info")]
                public string questName;
                public int questNumber;
                [TextArea(3, 10)]
                public string questDescription;
                string questGiver = "";
        
                [Header("Advanced Info")]
                public E_QuestStates state;
                public int currentProgress = -1;
                public int maxProgress = 1;
        
                public Quest parentQuest;
                public Quest[] subQuests;
                public bool linear = true;
        
                //public LootPool rewards;
                //public bool overrideParentRewards = false;
        
                #endregion
        
                [ContextMenu("Force Restart Quest")]
                public void ForceRestartQuest()
                {
                    ForceResetQuest();
                    StartQuest("Mama R", null);
                    UpdateQuestInfo(true);
                }
        
                [ContextMenu("Force Start Quest")]
                public void ForceStartQuest()
                {
                    StartQuest("Mama R", null);
                    UpdateQuestInfo(true);
                }
        
                [ContextMenu("Force Reset Quest")]
                public void ForceResetQuest()
                {
                    state = E_QuestStates.NotStarted;
                    currentProgress = -1;
        
                    foreach (Quest quest in subQuests)
                    {
                        quest.ForceResetQuest();
                    }
        
                    UpdateQuestInfo(true);
                }
        
                public Quest GetParent()
                {
                    if (parentQuest == null)
                        return this;
        
                    return parentQuest.GetParent();
                }
        
                #endregion
        
                #region Quest Progress
        
                public void StartQuest(string questGiver, Quest parent)
                {
                    //Debug.Log("Start quest " + questName);
        
                    if (parent != null)
                        parentQuest = parent;
        
                    this.questGiver = questGiver;
                    state = E_QuestStates.InProgress;
        
                    currentProgress = 0;
        
                    EnableNextObjective();
                    EnableAllObjectives();
        
                    if (QuestInfo.instance != null)
                        QuestInfo.instance.SetTrackingQuest(this.GetParent());
                    UpdateQuestInfo(true);
                }
        
                [ContextMenu("Quest Progress")]
                public void QuestProgressContext()
                {
                    QuestProgress(true);
                }
        
                public bool QuestProgress(bool updateMarkers)
                {
                    if (state != E_QuestStates.InProgress)
                        return false;
        
                    bool finished = false;
                    currentProgress++;
        
                    if (currentProgress >= maxProgress)
                    {
                        if (parentQuest != null)
                        {
                            parentQuest.QuestProgress(updateMarkers);
                        }
        
                        state = E_QuestStates.Completed;
                        GiveRewards();
        
                        finished = true;
                    }
                    else
                    {
                        EnableNextObjective();
                    }
        
                    UpdateQuestInfo(updateMarkers);
        
                    return finished;
                }
        
                void EnableNextObjective()
                {
                    if (subQuests.Length > 0)
                    {
                        if (linear)
                        {
                            subQuests[currentProgress].StartQuest(questGiver, this);
                        }
                    }
        
                    UpdateQuestInfo(true);
                }
        
                void EnableAllObjectives()
                {
                    if (!linear)
                    {
                        for (int i = 0; i < subQuests.Length; i++)
                        {
                            subQuests[i].StartQuest(questGiver, this);
                        }
                    }
        
                    UpdateQuestInfo(true);
                }
        
                void GiveRewards()
                {
                    UpdateQuestInfo(true);
                    /*
                    if (overrideParentRewards)
                    {
                        OverrideRewards(rewards);
                        return;
                    }
                    else
                        rewards.RewardItems();
                    */
                }
        
                public void OverrideRewards(/*LootPool newRewards*/)
                {
                    /*
                    if (parentQuest == null)
                    {
                        rewards = newRewards;
                    }
                    else
                    {
                        parentQuest.OverrideRewards(newRewards);
                    }
                    */
                }
        
                void UpdateQuestInfo(bool updateMarkers)
                {
                    if (QuestInfo.instance != null)
                    {
                        QuestInfo.instance.UpdateQuestInfo();
                    }
        
                    if (Application.isPlaying && updateMarkers)
                    {
                        //Debug.Log("updating quest markers");
                        CheckQuestMarkers();
        
                        if (updateQuestDelegate == null)
                        {
                            updateQuestDelegate += UpdateQuestInfoDelegate;
                        }
        
                        updateQuestDelegate(state, currentProgress);
                    }
                }
        
                public delegate void UpdateQuestDelegate(E_QuestStates questState, int progress);
                public UpdateQuestDelegate updateQuestDelegate;
        
                void UpdateQuestInfoDelegate(E_QuestStates questState, int progress)
                {
                    //Empty delegate function
                    //Debug.Log("Quest updated - Delegate Called");
                }
        
                void CheckQuestMarkers()
                {
                    /*
                    if (Compass.instance != null)
                        Compass.instance.CheckQuestMarkers();
                    */
                }
        
                public Quest GetCurrentQuestProgress()
                {
                    //currently this only allows quests with a linear progression, so no choices yet
                    if (state != E_QuestStates.InProgress)
                        return null;
        
                    Quest quest = this;
        
                    if (subQuests.Length > 0)
                        quest = subQuests[currentProgress].GetCurrentQuestProgress();
        
                    return quest;
                }
        
                #endregion
        
                #region Saving and Loading
        
                public void LoadQuestData(int progress)
                {
                    currentProgress = progress;
                    CheckProgress();
                }
        
                void CheckProgress()
                {
                    if (currentProgress == -1)
                        state = E_QuestStates.NotStarted;
                    else if (currentProgress == maxProgress)
                        state = E_QuestStates.Completed;
                    else
                        state = E_QuestStates.InProgress;
                }
        
                #endregion
        
                #region Dev Command
        
                [ContextMenu("Force Quest - Cave Start")]
                public void TestQuestCommand13()
                {
                    DevForceSetQuestProgress(13);
                }
        
                public void DevForceSetQuestProgress(int progress)
                {
                    if (parentQuest != null)
                    {
                        parentQuest.DevForceSetQuestProgress(progress);
                        return;
                    }
        
                    Debug.Log(questName + " is the parent for quest resetting");
                    ForceRestartQuest();
        
                    RForceSetQuestProgress(progress, 0);
        
                    if (Application.isPlaying)
                        UpdateQuestInfo(true);
                }
        
                public int RForceSetQuestProgress(int progress, int count)
                {
                    if (subQuests.Length == 0)
                    {
                        while (count < progress && currentProgress < maxProgress)
                        {
                            Debug.Log(questName + " is progressing " + count);
                            QuestProgress(false);
                            count++;
                        }
                        return count;
                    }
        
                    foreach (var item in subQuests)
                    {
                        if (count < progress)
                        {
                            Debug.Log(questName + " is progressing children (recursive) " + count);
                            count = item.RForceSetQuestProgress(progress, count);
                        }
                    }
        
                    return count;
                }
        
                #endregion
            }
        
            public enum E_QuestStates
            {
                NotStarted, InProgress, Failed, Completed
            }
        }
    '),
    new CodeSnippet("Enfabler", "Quest Progress", "Code for the base progress quest class", '
        using System.Collections;
        using System.Collections.Generic;
        using UnityEngine;
        using Enfabler.Quests;
        
        public class ProgressQuest : MonoBehaviour
        {
            public Quest[] quests;
            public bool progressAll = false;
            protected int stage = 0;
        
            // Start is called before the first frame update
            protected virtual void Start()
            {
                foreach(var item in quests)
                {
                    //Debug.Log("Added to quest delegate " + item.name);
                    item.updateQuestDelegate += CheckUpdate;
                    if (item.state == E_QuestStates.InProgress)
                        QuestInProgress(true);
                }
            }
        
            private void OnDestroy()
            {
                foreach (var item in quests)
                {
                    //Debug.Log("Remove from quest delegate " + item.name);
                    item.updateQuestDelegate -= CheckUpdate;
                }
            }
        
            #region Quest Markers
        
            public GameObject overrideParentQuestMarker;
            public bool attachAsParent = true;
            public Vector3 markerOffset;
        
            public void CheckUpdate(E_QuestStates questState, int progress)
            {
                //Debug.Log("Quest updated - Received message");
        
                bool showMarker = false;
        
                foreach (var item in quests)
                {
                    if (item.state == E_QuestStates.InProgress)
                        showMarker = true;
                }
        
                QuestInProgress(showMarker);
            }
        
            GameObject marker;
        
            public void QuestInProgress(bool inProgress)
            {
                if (inProgress)
                {
                    if (marker == null)
                        marker = QuestMarkerManager.instance.AddQuestMarker(overrideParentQuestMarker == null ? this.gameObject : overrideParentQuestMarker, markerOffset, attachAsParent);
                }
                else
                {
                    QuestMarkerManager.instance.RemoveQuestMarker(marker);
                    marker = null;
                }
            }
        
            private void OnDrawGizmosSelected()
            {
                Gizmos.color = Color.green;
                Gizmos.DrawWireSphere(overrideParentQuestMarker == null ? transform.position + markerOffset : overrideParentQuestMarker.transform.position + markerOffset, 0.5f);
            }
        
            #endregion
        
            protected virtual void ProgressQuestStage()
            {
                if (progressAll)
                {
                    foreach (var item in quests)
                    {
                        item.QuestProgress(true);
                    }
        
                    return;
                }
        
                if (stage >= quests.Length)
                    return;
        
                if (quests[stage].QuestProgress(true))
                    stage++;
            }
        }
        
        [System.Serializable]
        public enum E_TutorialSteps
        {
            OnTriggerEnter, OnTriggerExit, OnHit,
        }
    '),
    new CodeSnippet("Enfabler", "Example: Quest Progress on Interact", "Child class that extends the progress quest class to progress quests when interacting with an object", '
        using System.Collections;
        using System.Collections.Generic;
        using UnityEngine;
        
        public class Interact_ProgressQuest : ProgressQuest
        {
            // Start is called before the first frame update
            protected override void Start()
            {
                base.Start();
                Interactable interactable = GetComponent<Interactable>();
                interactable.onInteractDelegate += OnInteract;
            }
        
            public void OnInteract(BaseCharacterController interactCharacter)
            {
                ProgressQuestStage();
            }
        }
    '),
    new CodeSnippet("Enfabler", "Example: Quest Progress when hit", "Child class that extends the progress quest class to progress quests when object is hit", '
        using System.Collections;
        using System.Collections.Generic;
        using UnityEngine;
        using Enfabler.Attacking;
        
        public class Hit_ProgressQuest : ProgressQuest
        {
            public E_AttackType[] specifiedAttacks;
        
            // Start is called before the first frame update
            protected override void Start()
            {
                base.Start();
                Health health = GetComponent<Health>();
                if (health != null)
                    health.HitReactionDelegate += OnHit;
                RotateOnHit rotateOnHit = GetComponent<RotateOnHit>();
                if (rotateOnHit != null)
                    rotateOnHit.HitReactionDelegate += OnHit;
            }
        
            public void OnHit(int damage, Vector3 dir, E_AttackType attackType = E_AttackType.None)
            {
                //Debug.Log(attackType + " to progress quest");
        
                if (stage >= specifiedAttacks.Length)
                    return;
        
                if (specifiedAttacks[stage] == E_AttackType.None || attackType == specifiedAttacks[stage])
                    ProgressQuestStage();
            }
        }
    '),
    new CodeSnippet("Enfabler", "Quest Update", "Code for updating game objects when quest is progressed", '
        using System.Collections;
        using System.Collections.Generic;
        using UnityEngine;
        using Enfabler.Quests;
        
        public class UpdateGOQuestProgress : MonoBehaviour
        {
            public Quest quest;
            public E_QuestStates[] states;
        
            // Start is called before the first frame update
            protected virtual void Start()
            {
                if (quest != null)
                {
                    Debug.Log("Added to quest delegate " + quest.name);
                    quest.updateQuestDelegate += CheckUpdate;
        
                    ForceCheckUpdate();
                }
            }
        
            private void OnDestroy()
            {
                if (quest != null)
                    quest.updateQuestDelegate -= CheckUpdate;
            }
        
            protected void ForceCheckUpdate()
            {
                if (quest != null)
                    CheckUpdate(quest.state, quest.currentProgress);
            }
        
            public void CheckUpdate(E_QuestStates questState, int progress)
            {
                //Debug.Log("Quest updated - Received message");
        
                foreach (var item in states)
                {
                    if (item == questState)
                    {
                        //Debug.Log("Quest updated - Quest state is correct");
                        QuestUpdated();
                        return;
                    }
                }
            }
        
            public virtual void QuestUpdated()
            {
                //Override in other scripts
            }
        }
    '),
    new CodeSnippet("Enfabler", "Example: Enable Interaction on Quest Progression", "Child class that extends the quest update class to enable object interaction when specified quest is progressed", '
        using System.Collections;
        using System.Collections.Generic;
        using UnityEngine;
        
        public class UnlockInteraction_UpdateGOQuestProgress : UpdateGOQuestProgress
        {
            Interactable interactable;
        
            protected override void Start()
            {
                base.Start();
                interactable = GetComponent<Interactable>();
            }
        
            public override void QuestUpdated()
            {
                base.QuestUpdated();
                Debug.Log("Quest updated - Unlock interaction");
                interactable.UnlockInteraction();
            }
        }
    '),
    //Enfabler Spells Code
    new CodeSnippet("Enfabler", "Base Spell Class", "Code for the base spell class that manages what happens when a spell of any type is cast", '
        using System.Collections;
        using System.Collections.Generic;
        using UnityEngine;
        
        public class SpellStats : ScriptableObject
        {
            public string spellName;
            public Object spellFX;
        
            public bool attachToWeapon = true;
        
            public virtual void CastSpell(BaseCharacterController caster, GameObject target)
            {
                if (spellFX != null)
                {
                    GameObject fx;
        
                    if (attachToWeapon)
                    {
                        fx = Instantiate(spellFX, caster.GetCharacterCombat().weapon.transform) as GameObject;
                    }
                    else
                    {
                        fx = Instantiate(spellFX, caster.transform.position, caster.transform.rotation) as GameObject;
                    }
                }
            }
        }
    '),
    new CodeSnippet("Enfabler", "Summon Spell Class", "Child class that extends the spell stats class to add functionality for summon spells", '
        using System.Collections;
        using System.Collections.Generic;
        using UnityEngine;
        
        [CreateAssetMenu(fileName = "NewSummonSpell", menuName = "Spells/Summon", order = 1)]
        public class SummonSpell : SpellStats
        {
            [System.Serializable]
            public struct SummonData
            {
                public Object summon;
                public int count;
            }
        
            public SummonData[] summonData;
            public bool spawnAtCaster = true;
            public bool attachToTarget = false;
        
            public override void CastSpell(BaseCharacterController caster, GameObject target)
            {
                base.CastSpell(caster, target);
        
                SpawnObjects(caster, target);
            }
        
            void SpawnObjects(BaseCharacterController caster, GameObject target)
            {
                foreach (var item in summonData)
                {
                    for (int i = 0; i < item.count; i++)
                    {
                        Vector3 spawnPos;
        
                        Vector3 origin = caster.transform.position;
                        if (!spawnAtCaster)
                            origin = target == null ? caster.transform.position : target.transform.position;
        
                        if (!HelperFunctions.GetRandomPointOnNavmesh(origin, 10f, 0.5f, 100, out spawnPos))
                        {
                            spawnPos = caster.transform.position;
                        }
        
                        GameObject go = Instantiate(item.summon, spawnPos, Quaternion.identity) as GameObject;
        
                        if (attachToTarget)
                        {
                            go.transform.parent = spawnAtCaster ? caster.transform : target.transform;
                            go.transform.localPosition = Vector3.zero;
                        }
                    }
                }
            }
        }
    '),
    
    #endregion

    #region COA Code

    new CodeSnippet("Corruption of Arcana", "Card Class", "Class that activates spell effects and updates card art depending on it's stats", '
        using System.Collections;
        using System.Collections.Generic;
        using UnityEngine;
        using UnityEngine.UI;
        using TMPro;
        
        /// <summary>
        /// Authored & Written by Andrew Scott andrewscott@icloud.com
        /// 
        /// Use by NPS is allowed as a collective, for external use, please contact me directly
        /// </summary>
        namespace Necropanda
        {
            public class Card : MonoBehaviour
            {
                public Spell spell { get; private set; }
        
                public TextMeshProUGUI nameText;
                public Image nameImage;
                public Image background;
                public SpawnArcanaSymbol arcanaSpawner;
                public SpawnArcanaSymbol loadoutSpawner;
                public TextMeshProUGUI speedText;
                public TextMeshProUGUI descriptionText;
                public Image cardFaceLowOpacity;
                public Image cardFace;
                public GameObject unavailableOverlay;
        
                public void Setup(Spell spell)
                {
                    if (spell == null)
                        return;
        
                    this.spell = spell;
        
                    if (spell.nameImage != null)
                    {
                        nameImage.sprite = spell.nameImage;
                        nameText.color = new Color(0, 0, 0, 0);
                    }
                    else
                    {
                        nameImage.color = new Color(0, 0, 0, 0);
                        nameText.text = spell.spellName;
                    }
                    if (spell.background != null)
                        background.sprite = spell.background;
                    cardFace.sprite = spell.cardImage;
                    arcanaSpawner.SpawnArcanaSymbols(spell.arcanaCost);
                    loadoutSpawner.SpawnArcanaSymbols(spell.loadoutCost);
                    speedText.text = spell.speed.ToString();
                    descriptionText.text = IconManager.instance.ReplaceText(spell.spellDescription);
        
                    cardFaceLowOpacity.sprite = spell.cardImageLowOpacity;
                    cardFaceLowOpacity.gameObject.SetActive(spell.cardImageLowOpacity != null);
                    cardFace.sprite = spell.cardImage;
                    ShowSymbols();
                    if (cardFace.sprite == null)
                        ShowArt(false);
                    //SetupIcons();
        
                    gameObject.name = spell.spellName;
        
                    GetComponent<CardDrag2D>().Setup(this);
                    ShowUnavailableOverlay(3);
                }
        
                public void ShowArt(bool show)
                {
                    bool canShow = show;
        
                    if (cardFace.sprite == null)
                        canShow = false;
        
                    Color color = Color.white;
                    color.a = canShow ? 1 : 0;
        
                    cardFace.color = color;
        
                    //gridLayout.gameObject.SetActive(canShow);
                    gridLayout.gameObject.SetActive(false);
                }
        
        
                public Object imageObject;
                public GridLayoutGroup gridLayout;
        
                void ShowSymbols()
                {
                    List<Sprite> sprites = new List<Sprite>();
        
                    foreach (var item in spell.spellModules)
                    {
                        Sprite newSprite = GetEffectObject(item.effectType);
        
                        if (!sprites.Contains(newSprite) && item.value > 0)
                            sprites.Add(newSprite);
        
                        foreach (var status in item.statuses)
                        {
                            Sprite statusSprite = status.status.iconSprite;
        
                            if (!sprites.Contains(statusSprite))
                                sprites.Add(statusSprite);
        
                            foreach (var effect in status.status.effectModules)
                            {
                                Sprite effectSprite = GetEffectObject(effect.effectType);
        
                                if (!sprites.Contains(effectSprite))
                                    sprites.Add(effectSprite);
                            }
                        }
                    }
        
                    foreach (var item in sprites)
                    {
                        GameObject image = Instantiate(imageObject, gridLayout.gameObject.transform) as GameObject;
        
                        foreach (var imageObj in image.GetComponentsInChildren<Image>())
                        {
                            imageObj.sprite = item;
                        }
                    }
                }
        
                public Sprite physicalIcon, emberIcon, bleakIcon, staticIcon, septicIcon, perfotationIcon, randomIcon, healingIcon, shieldIcon, arcanaIcon;
        
                public Sprite GetEffectObject(E_DamageTypes effectType)
                {
                    switch (effectType)
                    {
                        case E_DamageTypes.Physical:
                            return physicalIcon;
                        case E_DamageTypes.Ember:
                            return emberIcon;
                        case E_DamageTypes.Bleak:
                            return bleakIcon;
                        case E_DamageTypes.Static:
                            return staticIcon;
                        case E_DamageTypes.Septic:
                            return septicIcon;
                        case E_DamageTypes.Perforation:
                            return perfotationIcon;
                        case E_DamageTypes.Random:
                            return randomIcon;
                        case E_DamageTypes.Healing:
                            return healingIcon;
                        case E_DamageTypes.Shield:
                            return shieldIcon;
                        case E_DamageTypes.Arcana:
                            return arcanaIcon;
                        default:
                            return null;
                    }
                }
        
                public void ShowUnavailableOverlay(int availableArcana)
                {
                    if (spell != null)
                    {
                        bool unavailable = availableArcana < spell.arcanaCost && spell.arcanaCost > 0 ? true : false;
        
                        unavailableOverlay.SetActive(unavailable);
                    }
                }
        
                public void CastSpell(Character target, Character caster)
                {
                    //spell.CastSpell(target, caster);
                }
        
                public void SetupIcons()
                {
                    if (cardFace == null)
                        return;
                    
                    descriptionText.text = IconManager.instance.ReplaceText(spell.spellDescription);
                }
        
                bool showing = false;
        
                private void Update()
                {
                    int linkIndex = TMP_TextUtilities.FindIntersectingLink(descriptionText, Input.mousePosition, DragManager.instance.UICam);
                    //Debug.Log("link info: " + linkIndex);
                    if (linkIndex != -1)
                    {
                        //Debug.Log("show tooltip - link info");
                        TMP_LinkInfo linkInfo = descriptionText.textInfo.linkInfo[linkIndex]; // Get the information about the link
                        // Do something based on what link ID or Link Text is encountered...
        
                        string id = linkInfo.GetLinkID();
                        string split = "$split$";
                        string[] parts = id.Split(split);
        
                        string title = parts[0];
                        string description = parts[1];
        
                        //Debug.Log(title + " || " + description);
                        TooltipManager.instance.ShowTooltip(true, title, description);
        
                        showing = true;
                    }
                    else
                    {
                        if (showing)
                        {
                            //Debug.Log("Close");
                            TooltipManager.instance.ShowTooltip(false, "Error", "Should not be showing");
                            showing = false;
                        }
                    }
                }
        
                private void OnDisable()
                {
                    TooltipManager.instance.ShowTooltip(false, "", "");
                }
        
                private void OnDestroy()
                {
                    TooltipManager.instance.ShowTooltip(false, "", "");
                }
            }
        }
    '),
    new CodeSnippet("Corruption of Arcana", "Card Drag 2D Class", "Class that enables cards to be dragged around and applies various transforms to animate the card", '
        using System.Collections;
        using System.Collections.Generic;
        using UnityEngine;
        using UnityEngine.EventSystems;
        using UnityEngine.UI;
        
        /// <summary>
        /// Authored & Written by Andrew Scott andrewscott@icloud.com
        /// 
        /// Use by NPS is allowed as a collective, for external use, please contact me directly
        /// </summary>
        namespace Necropanda
        {
            public class CardDrag2D : MonoBehaviour, IBeginDragHandler, IDragHandler, IEndDragHandler, IPointerEnterHandler, IPointerExitHandler
            {
                #region Setup
        
                #region Variables
        
                bool setup = false;
        
                public Deck2D deck;
                [HideInInspector]
                public Deck2D lastDeck;
                [HideInInspector]
                public Deck2D newDeck;
        
                public GameObject placeholder = null;
        
                Card card;
        
                public bool playerCard = true;
        
                DragManager dragManager;
        
                Vector2 offset;
        
                #region Scale Values
                public float hoverScale = 1.2f;
                public float pickupScale = 2;
                public float scaleSpeed = 0.1f;
                Vector3 baseScale;
                Vector3 desiredScale;
                #endregion
        
                #region Highlight Values
                public Image cardBackground;
                Color baseColor;
                public Color highlightColor;
                public float highlightSpeed = 0.2f;
                Color desiredColor;
                #endregion
        
                Vector3 baseRot;
                public float rotationScale = 0.1f;
                public float rotateDeadZone = 5;
        
                public CharacterHealth casterHealth;
                public List<CharacterHealth> targetHealths;
        
                #endregion
        
                public void Setup(Card card)
                {
                    this.card = card;
        
                    dragManager = DragManager.instance;
        
                    //Sets base scales and colours
                    //Debug.Log(card.spell.name + " | " + card.name + ": " + transform.localScale);
                    baseScale = transform.localScale;
                    desiredScale = baseScale;
                    baseColor = cardBackground.color;
                    desiredColor = baseColor;
                    baseRot = transform.rotation.eulerAngles;
        
                    ScaleCard(1, false);
        
                    if (CombatManager.instance != null)
                        casterHealth = CombatManager.instance.player.GetHealth();
        
                    setup = true;
                }
        
                #endregion
        
                #region Pointer Events
        
                /// <summary>
                /// Called when mouse hovers over card
                /// </summary>
                /// <param name="eventData"></param>
                public void OnPointerEnter(PointerEventData eventData)
                {
                    if (dragManager.canDrag)
                    {
                        //Debug.Log("Pointer Enter");
                        ScaleCard(hoverScale, false);
                        Highlight(true);
                        ShowArt(false);
                        HighlightTarget();
                    }
                }
        
                /// <summary>
                /// Called when mouse stops hovering over card
                /// </summary>
                /// <param name="eventData"></param>
                public void OnPointerExit(PointerEventData eventData)
                {
                    if (dragManager.canDrag)
                    {
                        //Debug.Log("Pointer Exit");
                        ScaleCard(1, false);
                        Highlight(false);
                        if (deck != null)
                        {
                            ShowArt(deck.showArt);
                        }
                        else
                        {
                            ShowArt(false);
                        }
                        StopHighlightTarget();
                    }
                }
        
                /// <summary>
                /// Called when starting to drag card
                /// </summary>
                /// <param name="eventData"></param>
                public void OnBeginDrag(PointerEventData eventData)
                {
                    if (dragManager.canDrag && playerCard)
                    {
                        //Debug.Log("Drag Start");
        
                        Highlight(false);
                        ScaleCard(pickupScale, true);
                        ShowArt(false);
        
                        //Create a space where this card was
                        placeholder = new GameObject();
                        placeholder.transform.SetParent(this.transform.parent);
                        LayoutElement le = placeholder.AddComponent<LayoutElement>();
                        le.preferredWidth = this.GetComponent<LayoutElement>().preferredWidth;
                        le.preferredHeight = this.GetComponent<LayoutElement>().preferredHeight;
                        le.flexibleHeight = 0;
                        le.flexibleWidth = 0;
        
                        placeholder.transform.SetSiblingIndex(this.transform.GetSiblingIndex());
        
                        lastDeck = deck;
                        deck.RemoveCard(this);
        
                        dragManager.StartDragging(this);
                        SetRayCastTargetAll(false);
        
                        dragManager.canDrag = false;
                    }
                }
        
                Vector2 lastPos = new Vector2(0, 0);
        
                /// <summary>
                /// Called when card is being dragged
                /// </summary>
                /// <param name="eventData"></param>
                public void OnDrag(PointerEventData eventData)
                {
                    if (dragManager.draggedCard != null && playerCard)
                    {
                        //Debug.Log("Dragging");
                        Vector2 newPos;
                        RectTransformUtility.ScreenPointToLocalPointInRectangle(dragManager.canvas.transform as RectTransform, Input.mousePosition, dragManager.canvas.worldCamera, out newPos);
        
                        //Determines the difference in the x movement to tell which direction it is being dragged in
                        float dragSpeedX = lastPos.x - newPos.x;
        
                        Vector3 newRot = new Vector3(baseRot.x, baseRot.y, baseRot.z);
                        newRot.z = dragSpeedX * rotationScale;
        
                        if (newRot.z > -rotateDeadZone && newRot.z < rotateDeadZone)
                        {
                            //Debug.Log("Not rotating");
                            transform.eulerAngles = baseRot;
                        }
                        else
                        {
                            //Debug.Log("Rotate");
                            transform.eulerAngles = newRot;
                        }
        
                        transform.position = dragManager.canvas.transform.TransformPoint(newPos);
                        transform.position += new Vector3(0, 0, -50);
        
                        lastPos = newPos;
        
                        Deck2D deck = lastDeck;
                        if (newDeck != null)
                            deck = newDeck;
        
                        if (deck.useSibIndex)
                        {
                            int newSibIndex = deck.transform.childCount;
        
                            //Move cards out of the way to make room for this one
                            for (int i = 0; i < deck.transform.childCount; i++)
                            {
                                if (this.transform.position.x < deck.transform.GetChild(i).position.x)
                                {
                                    newSibIndex = i;
        
                                    if (placeholder.transform.GetSiblingIndex() < newSibIndex)
                                    {
                                        newSibIndex--;
                                    }
        
                                    break;
                                }
                            }
        
                            placeholder.transform.SetSiblingIndex(newSibIndex);
                        }
                    }
                }
        
                /// <summary>
                /// Called when card stops being dragged
                /// </summary>
                /// <param name="eventData"></param>
                public void OnEndDrag(PointerEventData eventData)
                {
                    if (dragManager.draggedCard != null && playerCard)
                    {
                        //Debug.Log("Drag End");
        
                        if (newDeck == null)
                        {
                            lastDeck.AddCard(this);
                        }
                        else
                        {
                            newDeck.AddCard(this);
                        }
        
                        SetRayCastTargetAll(true);
        
                        ScaleCard(1, false);
                        Highlight(false);
                        StopHighlightTarget();
                        ShowArt(deck.showArt);
                        transform.eulerAngles = baseRot;
        
                        dragManager.StopDragging(this, deck.GetCharacter());
                    }
        
                    if (placeholder != null)
                    {
                        this.transform.SetSiblingIndex(placeholder.transform.GetSiblingIndex());
                        //TODO - If in new deck, ignore sibling index
                        Destroy(placeholder);
                        placeholder = null;
                    }
                }
        
                void SetRayCastTargetAll(bool targettable)
                {
                    CardDrag2D[] cards = GameObject.FindObjectsOfType<CardDrag2D>();
        
                    foreach (CardDrag2D card in cards)
                    {
                        card.cardBackground.raycastTarget = targettable;
                        card.cardBackground.maskable = targettable;
                    }
                }
        
                #endregion
        
                #region Visual Feedback
        
                [ColorUsage(true, true)]
                public Color greenColour = Color.green;
                [ColorUsage(true, true)]
                public Color redColour = Color.red;
                [ColorUsage(true, true)]
                public Color yellowColour = Color.yellow;
        
                public void HighlightTarget()
                {
                    if (CombatManager.instance == null) return;
        
                    targetHealths = new List<CharacterHealth>();
        
                    foreach (var item in CombatManager.instance.enemyTeamManager.team)
                    {
                        targetHealths.Add(item.GetHealth());
                    }
        
                    switch (card.spell.idealTarget)
                    {
                        case E_SpellTargetType.Caster:
                            //Debug.Log("Highlight caster for " + card.spell.spellName);
                            if (casterHealth.dying == false)
                                casterHealth.GetColorFlash().Highlight(greenColour);
                            break;
                        case E_SpellTargetType.Target:
                            //Debug.Log("Highlight targets for " + card.spell.spellName);
                            foreach (var item in targetHealths)
                            {
                                if (item.dying == false)
                                    item.GetColorFlash().Highlight(redColour);
                            }
                            break;
                        case E_SpellTargetType.All:
                            //Debug.Log("Highlight all characters for " + card.spell.spellName);
                            casterHealth.GetColorFlash().Highlight(yellowColour);
                            foreach (var item in targetHealths)
                            {
                                if (item.dying == false)
                                    item.GetColorFlash().Highlight(yellowColour);
                            }
                            break;
                        default:
                            Debug.LogWarning("Ideal target is not valid for " + card.spell.spellName);
                            break;
                    }
                }
        
                public void StopHighlightTarget()
                {
                    if (CombatManager.instance == null) return;
        
                    targetHealths = new List<CharacterHealth>();
        
                    foreach (var item in CombatManager.instance.enemyTeamManager.team)
                    {
                        targetHealths.Add(item.GetHealth());
                    }
        
                    switch (card.spell.idealTarget)
                    {
                        case E_SpellTargetType.Caster:
                            //Debug.Log("Highlight caster for " + card.spell.spellName);
                            if (casterHealth != null)
                            {
                                if (casterHealth.dying == false)
                                    casterHealth.GetColorFlash().RemoveHighlightColour();
                            }
                            break;
                        case E_SpellTargetType.Target:
                            //Debug.Log("Highlight targets for " + card.spell.spellName);
                            foreach (var item in targetHealths)
                            {
                                if (item != null)
                                {
                                    if (item.dying == false)
                                        item.GetColorFlash().RemoveHighlightColour();
                                }
                            }
                            break;
                        case E_SpellTargetType.All:
                            //Debug.Log("Highlight all characters for " + card.spell.spellName);
                            casterHealth.GetColorFlash().RemoveHighlightColour();
                            foreach (var item in targetHealths)
                            {
                                if (item != null)
                                {
                                    if (item.dying == false)
                                        item.GetColorFlash().RemoveHighlightColour();
                                }
                            }
                            break;
                        default:
                            Debug.LogWarning("Ideal target is not valid for " + card.spell.spellName);
                            break;
                    }
                }
        
                /// <summary>
                /// Turns the highlight colour on or off
                /// </summary>
                /// <param name="on">True for highlight color, False for base color</param>
                public void Highlight(bool on)
                {
                    //Desired color is set so that the color change can be smoothed in update
                    if (on)
                    {
                        desiredColor = baseColor * highlightColor;
                    }
                    else
                    {
                        desiredColor = baseColor;
                    }
                }
        
                /// <summary>
                /// Determines the scale multiplier for the card
                /// </summary>
                /// <param name="scaleFactor">Multiplies the base scale by the scale factor</param>
                public void ScaleCard(float scaleFactor, bool ignoreDeck)
                {
                    //Desired scale is set so that the scale change can be smoothed in update
                    if (deck == null || ignoreDeck)
                    {
                        desiredScale = baseScale * scaleFactor;
                    }
                    else
                    {
                        desiredScale = baseScale * scaleFactor * deck.deckScale;
                    }
                }
        
                void ShowArt(bool show)
                {
                    card.ShowArt(show);
                }
        
                private void Update()
                {
                    if (!setup)
                        return;
        
                    //Lerps scale and color to smoothen transitions
        
                    if (transform.localScale != desiredScale)
                    {
                        float lerpX = Mathf.Lerp(transform.localScale.x, desiredScale.x, scaleSpeed * Time.unscaledDeltaTime);
                        float lerpY = Mathf.Lerp(transform.localScale.y, desiredScale.y, scaleSpeed * Time.unscaledDeltaTime);
                        float lerpZ = Mathf.Lerp(transform.localScale.z, desiredScale.z, scaleSpeed * Time.unscaledDeltaTime);
        
                        transform.localScale = new Vector3(lerpX, lerpY, lerpZ);
                    }
        
                    if (cardBackground.color != desiredColor)
                    {
                        float lerpR = Mathf.Lerp(cardBackground.color.r, desiredColor.r, highlightSpeed * Time.unscaledDeltaTime);
                        float lerpG = Mathf.Lerp(cardBackground.color.g, desiredColor.g, highlightSpeed * Time.unscaledDeltaTime);
                        float lerpB = Mathf.Lerp(cardBackground.color.b, desiredColor.b, highlightSpeed * Time.unscaledDeltaTime);
                        float lerpA = Mathf.Lerp(cardBackground.color.a, desiredColor.a, highlightSpeed * Time.unscaledDeltaTime);
        
                        cardBackground.color = new Color(lerpR, lerpG, lerpB, lerpA);
                    }
                }
        
                #endregion
            }
        }
    '),
    new CodeSnippet("Corruption of Arcana", "Deck 2D Class", "Class that adds functionality for decks, which are spaces cards can be dragged onto", '
        using System.Collections;
        using System.Collections.Generic;
        using UnityEngine;
        using UnityEngine.EventSystems;
        using UnityEngine.UI;
        using FMODUnity;
        
        /// <summary>
        /// Authored & Written by Andrew Scott andrewscott@icloud.com
        /// 
        /// Use by NPS is allowed as a collective, for external use, please contact me directly
        /// </summary>
        namespace Necropanda
        {
            public class Deck2D : MonoBehaviour, IPointerEnterHandler, IPointerExitHandler
            {
                #region Setup
        
                #region References
        
                protected Character player;
                protected Character character; public Character GetCharacter() { return character; }
                protected Timeline timeline;
                protected DeckManager manager;
        
                public GameObject group;
                protected LayoutGroup layout;
        
                public Object cardSpace;
                public int minCardCount;
                List<GameObject> currentCardSpaces = new List<GameObject>();
        
                protected GeneralDragArea dragArea;
                protected DragManager dragManager;
        
                protected bool open = true;
                protected UntargettableOverlay untargettableOverlay;
        
                public bool showArt = false;
                public bool useSibIndex = true;
        
                #endregion
        
                #region Cards
        
                protected CardDrag2D[] cards = new CardDrag2D[0];
        
                public List<GameObject> GetCards()
                {
                    List<GameObject> cardObjects = new List<GameObject>();
        
                    if (cards == null)
                        return cardObjects;
        
                    foreach (var item in cards)
                    {
                        cardObjects.Add(item.gameObject);
                    }
                    //Debug.Log(cards.Length + " cards in hand || " + cardObjects.Count + " objects in list");
                    return cardObjects;
                }
        
                public List<E_CardTypes> availableCards;
                public int maxCards = 3;
                public int CurrentCardsLength()
                {
                    if (cards == null) return 0;
                    return cards.Length;
                }
        
                public List<Spell> GetSpells()
                {
                    List<Spell> spells = new List<Spell>();
        
                    if (cards.Length <= 0) return spells;
        
                    foreach (CardDrag2D card in cards)
                    {
                        Card cardInstance = card.GetComponent<Card>();
        
                        Spell spellInstance = cardInstance.spell;
        
                        spells.Add(spellInstance);
                    }
        
                    return spells;
                }
        
                public float deckScale = 1;
        
                #endregion
        
                #region Highlight Values
                protected Image deckBackground;
                protected Color baseColor;
                public Color highlightColor;
                public float highlightSpeed = 0.2f;
                protected Color desiredColor;
                #endregion
        
                protected virtual void Start()
                {
                    //Sets up base values
                    ResetArrays();
        
                    dragArea = GameObject.FindObjectOfType<GeneralDragArea>();
                    dragManager = DragManager.instance;
        
                    deckBackground = group.GetComponent<Image>();
                    baseColor = deckBackground.color;
                    desiredColor = baseColor;
        
                    layout = GetComponent<LayoutGroup>();
        
                    untargettableOverlay = transform.parent.GetComponentInChildren<UntargettableOverlay>();
                    SetOverlay(false, " ");
        
                    useSibIndex = layout != null;
        
                    CheckCardSpace();
                }
        
                private void OnEnable()
                {
                    CheckCardSpace();
                }
        
                #endregion
        
                #region Pointer Events
        
                /// <summary>
                /// Called when mouse hovers over deck
                /// </summary>
                /// <param name="eventData"></param>
                public virtual void OnPointerEnter(PointerEventData eventData)
                {
                    //Only fires logic when player is dragging a card into the deck
                    if (eventData.dragging == true && dragManager.draggedCard != null && open)
                    {
                        if (availableCards.Contains(dragManager.draggedCard.GetComponent<Card>().spell.cardType) == false)
                            return;
        
                        if (cards.Length < maxCards)
                        {
                            //Debug.Log(cards.Length + " / " + maxCards);
                            CardDrag2D currentCard = dragManager.draggedCard;
                            currentCard.newDeck = this;
                            currentCard.ScaleCard(currentCard.hoverScale, true);
                            currentCard.placeholder.transform.SetParent(this.transform);
                            Highlight(true);
                        }
                    }
                }
        
                /// <summary>
                /// Called when mouse stops hovering over deck
                /// </summary>
                /// <param name="eventData"></param>
                public void OnPointerExit(PointerEventData eventData)
                {
                    //Only fires logic when player is dragging a card off the deck
                    if (eventData.dragging == true && dragManager.draggedCard != null && open)
                    {
                        CardDrag2D currentCard = dragManager.draggedCard;
                        currentCard.newDeck = null;
                        currentCard.ScaleCard(currentCard.pickupScale, true);
                        Highlight(false);
                    }
                }
        
                #endregion
        
                #region Adding/Removing Cards
        
                /// <summary>
                /// Called when player drags a card away from the deck
                /// </summary>
                /// <param name="card"></param>
                public virtual void RemoveCard(CardDrag2D card)
                {
                    card.gameObject.transform.SetParent(dragArea.transform);
                    card.deck = null;
        
                    ResetArrays();
                }
        
                /// <summary>
                /// Removes all cards from the deck without taking them from the timeline
                /// </summary>
                public virtual void RemoveAllCards(bool discard)
                {
                    //Overrided in most children, this is the base behaviour
                    ResetArrays();
        
                    cards = new CardDrag2D[0];
                    if (timeline != null)
                        timeline.SimulateSpellEffects();
                }
        
                /// <summary>
                /// Called when player drops a card onto this deck
                /// </summary>
                /// <param name="card"></param>
                public virtual void AddCard(CardDrag2D card)
                {
                    card.gameObject.transform.SetParent(group.transform);
                    card.gameObject.transform.position = gameObject.transform.position;
                    card.deck = this;
                    card.GetComponent<Card>().ShowArt(showArt);
        
                    ResetArrays();
        
                    PlayCardSound();
                }
        
                /// <summary>
                /// Needs to be called whenever a card is removed or added to this deck
                /// Clears the array and resets it to what is currently in the deck
                /// </summary>
                protected virtual void ResetArrays()
                {
                    Highlight(false);
        
                    cards = GetComponentsInChildren<CardDrag2D>();
        
                    foreach (CardDrag2D card in cards)
                    {
                        card.deck = this;
        
                        card.gameObject.transform.SetParent(group.transform);
                    }
        
                    CheckCardSpace();
                }
        
                protected void CheckCardSpace()
                {
                    if (cardSpace == null)
                        return;
        
                    foreach(var item in currentCardSpaces)
                    {
                        Destroy(item.gameObject);
                    }
        
                    currentCardSpaces.Clear();
        
                    int cardDiff = minCardCount - cards.Length;
        
                    for(int i = 0; i < cardDiff; i++)
                    {
                        currentCardSpaces.Add(Instantiate(cardSpace, transform) as GameObject);
                    }
                }
        
                #endregion
        
                #region Visual Feedback
        
                /// <summary>
                /// Turns the highlight colour on or off
                /// </summary>
                /// <param name="on">True for highlight color, False for base color</param>
                void Highlight(bool on)
                {
                    //Desired color is set so that the color change can be smoothed in update
                    if (on)
                    {
                        desiredColor = highlightColor;
                    }
                    else
                    {
                        desiredColor = baseColor;
                    }
                }
        
                private void Update()
                {
                    //Lerps color to smoothen transitions
                    if (deckBackground.color != desiredColor)
                    {
                        float lerpR = Mathf.Lerp(deckBackground.color.r, desiredColor.r, highlightSpeed);
                        float lerpG = Mathf.Lerp(deckBackground.color.g, desiredColor.g, highlightSpeed);
                        float lerpB = Mathf.Lerp(deckBackground.color.b, desiredColor.b, highlightSpeed);
                        float lerpA = Mathf.Lerp(deckBackground.color.a, desiredColor.a, highlightSpeed);
        
                        deckBackground.color = new Color(lerpR, lerpG, lerpB, lerpA);
                    }
                }
        
                public void CheckOverlay()
                {
                    //Player Stun Check
                    if (player.stun)
                    {
                        //Debug.Log("Target stunned, apply overlay");
                        SetOverlay(true, "Cannot Target - Player Stunned");
                    }
                    else if (player.banish)
                    {
                        //Debug.Log("Target stunned, apply overlay");
                        SetOverlay(true, "Cannot Target - Player Banished");
                    }
                    else if (character.banish && player != character)
                    {
                        //Debug.Log("Target stunned, apply overlay");
                        SetOverlay(true, "Cannot Target - Target Banished");
                    }
                    else if (character.GetHealth().GetHealth() < 1)
                    {
                        //Debug.Log("Target killed, apply overlay");
                        SetOverlay(true, "Cannot Target - Target Killed");
                    }
                    else
                    {
                        //Debug.Log("Target ok, remove overlay");
                        SetOverlay(false, " ");
                    }
                }
        
                void SetOverlay(bool active, string message)
                {
                    open = !active;
                    if (untargettableOverlay != null)
                        untargettableOverlay.SetOverlay(active, message);
                }
        
                #endregion
        
                #region Sound Effects
        
                [Header("Sound Effects")]
                public EventReference cardPlacedSound;
        
                public void PlayCardSound()
                {
                    RuntimeManager.PlayOneShot(cardPlacedSound);
                }
        
                #endregion
            }
        
            public enum E_CardTypes
            {
                All, Cards, Potions, Bombs, Weapons, Trinkets, None
            }
        }
    '),
    new CodeSnippet("Corruption of Arcana", "Spellcasting AI Class", "Class for enemies to determine which spells to cast using a utilit-based AI approach, which estimates the spell effect based on stats like damage, healing and status effects to determine which spell has the best effect", '
        using System.Collections;
        using System.Collections.Generic;
        using UnityEngine;
        
        /// <summary>
        /// Authored & Written by Andrew Scott andrewscott@icloud.com
        /// 
        /// Use by NPS is allowed as a collective, for external use, please contact me directly
        /// </summary>
        namespace Necropanda
        {
            [CreateAssetMenu(fileName = "NewSpellcastingAI", menuName = "Combat/Spell-casting AI", order = 3)]
            public class SpellCastingAI : ScriptableObject
            {
                #region Setup
        
                public bool random = false;
                public bool ordered = false;
        
                [Header("Basic Utility Values")]
                public float damageUtility;
                public float controlUtility;
                public float supportSelfUtility;
                public float supportAllyUtility;
                public float spawnAllyUtility;
                public float spawnAllyHealthUtility;
        
                [Header("Advanced Utility Values")]
                public CombatHelperFunctions.StatusUtility[] statusUtilities;
                public float duplicateEffectsUtility = 0.45f, duplicateLastTurnUtility = 0.75f, duplicateThisTurnUtility = 0.2f;
        
                #endregion
        
                #region Utility Calculators
        
                /// <summary>
                /// Determines which spell the AI will cast
                /// </summary>
                /// <param name="spellList">The list of available spells</param>
                /// <param name="self">The caster of the spell</param>
                /// <param name="allyTeam">The allied team of the caster</param>
                /// <param name="enemyTeam">The opposing team of the caster</param>
                /// <returns></returns>
                public CombatHelperFunctions.SpellUtility GetSpell(List<CombatHelperFunctions.AISpell> spellList, Character self, List<Character> allyTeam, List<Character> enemyTeam)
                {
                    CombatHelperFunctions.SpellUtility spellUtility = new CombatHelperFunctions.SpellUtility();
                    List<Character> allTargets = new List<Character>();
                    allTargets = HelperFunctions.CombineLists(CombatManager.instance.playerTeamManager.team, CombatManager.instance.enemyTeamManager.team);
        
                    if (spellList.Count == 0)
                        return spellUtility;
        
                    if (random)
                    {
                        spellUtility.spell = spellList[Random.Range(0, spellList.Count)];
                        spellUtility.target = allTargets[Random.Range(0, allTargets.Count)];
                        spellUtility.utility = 0f;
                    }
                    else if (ordered && CombatManager.instance.currentTurn < spellList.Count)
                    {
                        for (int i = 0; i < spellList.Count; i++)
                        {
                            if (i == CombatManager.instance.currentTurn)
                            {
                                spellUtility.spell = spellList[i];
                                spellUtility.target = self;
                                spellUtility.utility = 0f;
                            }
                        }
                    }
                    else
                    {
                        spellUtility = UtilityCalculation(spellList, self, allyTeam, enemyTeam);
                    }
        
                    //Debug.Log(self.stats.characterName + " is planning to cast " + spellUtility.spell.spell.spellName + " on " + spellUtility.target + " with a utility: " + spellUtility.utility);
        
                    if (spellUtility.target == null)
                    {
                        Debug.Log("target is null");
                    }
                    else if (spellUtility.target.GetHealth().dying)
                    {
                        Debug.Log(spellUtility.target + " is dying");
                    }
        
                    return spellUtility;
                }
        
                /// <summary>
                /// Loops through all available spell to determine the best spell to cast based on its utility
                /// </summary>
                /// <param name="spellList">The list of available spells</param>
                /// <param name="self">The caster of the spell</param>
                /// <param name="allyTeam">The allied team of the caster</param>
                /// <param name="enemyTeam">The opposing team of the caster</param>
                /// <returns></returns>
                CombatHelperFunctions.SpellUtility UtilityCalculation(List<CombatHelperFunctions.AISpell> spellList, Character self, List<Character> allyTeam, List<Character> enemyTeam)
                {
                    CombatHelperFunctions.SpellUtility bestSpell = new CombatHelperFunctions.SpellUtility();
                    bestSpell.utility = -5;
                    List<Character> allTargets = new List<Character>();
                    allTargets = HelperFunctions.CombineLists(CombatManager.instance.playerTeamManager.team, CombatManager.instance.enemyTeamManager.team);
        
                    foreach (Character target in allTargets)
                    {
                        if (!target.CanBeTargetted())
                            break;
        
                        foreach (CombatHelperFunctions.AISpell spell in spellList)
                        {
                            if (self.charm == false && CanCastSpell(spell, self, target, allyTeam, enemyTeam))
                            {
                                float utility = 0;
        
                                utility = SpellUtility(spell, self, target, allyTeam, enemyTeam);
        
                                if (utility > bestSpell.utility)
                                {
                                    bestSpell.spell = spell;
                                    bestSpell.target = target;
                                    bestSpell.utility = utility;
                                }
                            }
                            else if (self.charm && CanCastSpell(spell, self, target, enemyTeam, allyTeam))
                            {
                                float utility = 0;
        
                                utility = SpellUtility(spell, self, target, enemyTeam, allyTeam);
        
                                if (utility > bestSpell.utility)
                                {
                                    bestSpell.spell = spell;
                                    bestSpell.target = target;
                                    bestSpell.utility = utility;
                                }
                            }
                        }
                    }
        
                    return bestSpell;
                }
        
                /// <summary>
                /// Determines the spell utility of an individual spell
                /// </summary>
                /// <param name="spell">The spell being cast</param>
                /// <param name="self">The caster of the spell</param>
                /// <param name="target">The target of the spell</param>
                /// <param name="allyTeam">The allied team of the caster</param>
                /// <param name="enemyTeam">The opposing team of the caster</param>
                /// <returns>A float value of the effectiveness of the spell</returns>
                float SpellUtility(CombatHelperFunctions.AISpell spell, Character self, Character target, List<Character> allyTeam, List<Character> enemyTeam)
                {
                    float spellUtility = 0;
        
                    //Loop through all of the spell modules
                    foreach (CombatHelperFunctions.SpellModule module in spell.spell.spellModules)
                    {
                        float statusUtility = StatusUtility(module);
        
                        float moduleUtility = 0;
        
                        if (spell.targetSelf && target == self)
                        {
                            float targetUtility = 0;
        
                            if (module.effectType == E_DamageTypes.Healing)
                            {
                                int targetHealth = target.GetHealth().GetHealth();
                                int targetMaxHealth = target.GetHealth().GetMaxHealth();
                                targetUtility = targetMaxHealth - targetHealth;
                            }
        
                            if (module.effectType == E_DamageTypes.Summon && module.summon != null)
                            {
                                float spawnUtility = spawnAllyUtility * module.value;
        
                                spawnUtility += module.summon.maxHealth * spawnAllyHealthUtility * module.value;
        
                                spellUtility += spawnUtility;
                            }
        
                            moduleUtility += (module.value + targetUtility) * supportSelfUtility;
                            moduleUtility += statusUtility;
                        }
                        else if (self.banish == false && target.banish == false && target != self)
                        {
                            if (spell.targetAllies && allyTeam.Contains(target))
                            {
                                float targetUtility = 0;
        
                                if (module.effectType == E_DamageTypes.Healing)
                                {
                                    int targetHealth = target.GetHealth().GetHealth();
                                    int targetMaxHealth = target.GetHealth().GetMaxHealth();
                                    targetUtility = targetMaxHealth - targetHealth;
                                }
        
                                if (module.effectType == E_DamageTypes.Summon && module.summon != null)
                                {
                                    float spawnUtility = spawnAllyUtility * module.value;
        
                                    spawnUtility += module.summon.maxHealth * spawnAllyHealthUtility * module.value;
        
                                    spellUtility += spawnUtility;
                                }
        
                                moduleUtility += (module.value + targetUtility) * supportAllyUtility;
                                moduleUtility += statusUtility;
                            }
                            else if (spell.targetEnemies && enemyTeam.Contains(target))
                            {
                                int targetHealth = target.GetHealth().GetHealth();
                                int targetMaxHealth = target.GetHealth().GetMaxHealth();
                                float targetUtility = targetMaxHealth - targetHealth;
        
                                moduleUtility += module.value * damageUtility;
                                moduleUtility -= statusUtility;
                            }
        
                            spellUtility += moduleUtility;
                        }
                    }
        
                    //Debug.Log(self.stats.characterName + " casting " + spell.spell.spellName + " on " + target.stats.characterName + " has utility: " + spellUtility);
        
                    Enemy selfAI = self as Enemy;
        
                    if (selfAI != null)
                    {
                        if (selfAI.spellsThisTurn.Contains(spell.spell.spellName))
                        {
                            spellUtility *= duplicateThisTurnUtility;
                        }
        
                        if (selfAI.spellsLastTurn.Contains(spell.spell.spellName))
                        {
                            spellUtility *= duplicateLastTurnUtility;
                        }
        
                        foreach (var item in spell.spell.spellModules)
                        {
                            if (selfAI.effectsThisTurn.Contains(item.effectType))
                                spellUtility *= duplicateEffectsUtility;
                        }
        
                    }
        
                    return spellUtility;
                }
        
                float StatusUtility(CombatHelperFunctions.SpellModule spell)
                {
                    float effect = 0;
        
                    foreach (var module in spell.statuses)
                    {
                        foreach (var status in module.status.effectModules)
                        {
                            if (status.effectType == E_DamageTypes.Healing || status.effectType == E_DamageTypes.Shield)
                                effect += (float)status.value * supportSelfUtility;
                            else
                                effect -= (float)status.value * damageUtility;
        
                            if (statusUtilities != null)
                            {
                                foreach (var item in this.statusUtilities)
                                {
                                    if (item.status == status.status)
                                        effect += item.utility;
                                }
                            }
        
                            break;
                        }
                    }
                    Debug.Log(effect);
                    return effect;
                }
        
                #endregion
        
                /// <summary>
                /// Determines if the spell can be cast on the character
                /// </summary>
                /// <param name="spell">The spell being cast</param>
                /// <param name="self">The caster of the spell</param>
                /// <param name="target">The target of the spell</param>
                /// <param name="allyTeam">The allied team of the caster</param>
                /// <param name="enemyTeam">The opposing team of the caster</param>
                /// <returns>True if spell can be cast, false otherwise</returns>
                bool CanCastSpell(CombatHelperFunctions.AISpell spell, Character self, Character target, List<Character> allyTeam, List<Character> enemyTeam)
                {
                    if (spell.lastUsed < spell.timeCooldown)
                    {
                        return false;
                    }
        
                    if (self.silence && spell.timeCooldown > 0)
                    {
                        return false;
                    }
        
                    if (spell.targetSelf && target == self)
                    {
                        return true;
                    }
        
                    if (spell.targetAllies && target != self && allyTeam.Contains(target))
                    {
                        return true;
                    }
        
                    if (spell.targetEnemies && target != self && enemyTeam.Contains(target))
                    {
                        return true;
                    }
        
                    return false;
                }
            }
        }
    '),

    #endregion

    #region Creak
    
    new CodeSnippet("Creak", "Player Controller", "Classs for controlling the main character", '
        using System.Collections;
        using System.Collections.Generic;
        using UnityEngine;
        
        public class PlayerController : MonoBehaviour
        {
            public bool sprinting { get; protected set; } = false;
            public float speed = 4;
            float xMove = 0;
        
            bool jumping = false;
            bool canStopJump = false;
            public float jumpForce = 10f;
            public float gravityMultiplier = 5f;
            public Vector2 jumpTime = new Vector2(0.2f, 0.5f);
            public float landImpulseStrength = 4f;
            public float landImpulseT = 0.001f;
        
            protected Rigidbody rb;
            CharacterController controller;
        
            public LayerMask groundLayer;
            protected bool grounded;
        
            PlayerSoundwaveManager soundManager;
        
            protected virtual void Start()
            {
                controller = GetComponent<CharacterController>();
                soundManager = GetComponent<PlayerSoundwaveManager>();
                //rb = GetComponent<Rigidbody>();
        
                land += Land;
                move += Move;
            }
        
            private void FixedUpdate()
            {
                float yMove = jumping ? jumpForce : gravityMultiplier;
        
                controller.Move(new Vector3(speed * xMove * Time.fixedDeltaTime, yMove * Time.fixedDeltaTime));
            }
        
            private void Update()
            {
                xMove = Input.GetAxis("Horizontal");
        
                if (!Mathf.Approximately(xMove, 0))
                    move();
        
                if (!grounded && controller.isGrounded)
                {
                    if (ignoreLand)
                    {
                        ignoreLand = false;
                    }
                    else
                    {
                        land();
                    }
                }
        
                grounded = controller.isGrounded;
        
                if (Input.GetButtonDown("Jump") && grounded)
                {
                    Debug.Log("Jump start");
                    jumping = true;
                    canStopJump = false;
                    Invoke("EnableStopJump", jumpTime.x);
                    Invoke("ForceStopJump", jumpTime.y);
                }
        
                if (canStopJump && !Input.GetButton("Jump"))
                {
                    ForceStopJump();
                }
            }
        
            void ForceStopJump()
            {
                jumping = false;
                canStopJump = false;
            }
        
            void EnableStopJump()
            {
                canStopJump = true;
            }
        
            bool ignoreLand = true;
        
            void Land()
            {
                //soundManager.Impulse(landImpulseStrength, landImpulseT);
            }
        
            public delegate void DMessage();
            public DMessage move, land;
        
            void Move()
            {
                //Empty
            }
        }
    '),
    new CodeSnippet("Creak", "Impulse Class", "Class that spawns soundwaves when colliding with another object with enough velocity and increases impulse strength based on velocity", '
        using System.Collections;
        using System.Collections.Generic;
        using UnityEngine;
        
        public class Impulse : MonoBehaviour
        {
            public Object soundwaveObject;
            public float impulseMultiplier = 2f;
            public float soundMultiplier = 0.5f;
            public float returnT = 0.001f;
            public float minImpactThreshold = 0.75f;
        
            private void OnCollisionEnter(Collision collision)
            {
                if (collision.relativeVelocity.magnitude > minImpactThreshold)
                {
                    GameObject GO = Instantiate(soundwaveObject, collision.GetContact(0).point, Quaternion.identity) as GameObject;
        
                    Soundwave soundwaveScript = GO.GetComponent<Soundwave>();
                    soundwaveScript.Impulse(impulseMultiplier * collision.relativeVelocity.magnitude, returnT);
        
                    AudioManager.instance.PlaySoundEffect(AudioManager.instance.defaultThud, soundMultiplier * collision.relativeVelocity.magnitude);
                }
            }
        }
    '),
    new CodeSnippet("Creak", "Soundwave Class", "Class that animates the soundwave size, which is based on the initial impact strength (from impulse class) and then shrinks soundwave size", '
        using System.Collections;
        using System.Collections.Generic;
        using UnityEngine;
        
        public class Soundwave : MonoBehaviour
        {
            bool setup = false;
        
            void FixedUpdate()
            {
                if (!setup)
                    return;
        
                returnT = Mathf.Clamp((returnT + returnInterval) * Time.fixedDeltaTime, 0, 1);
                tempImpulse = Mathf.Lerp(tempImpulse, 0, returnT);
        
                UpdateSoundWaveSize(tempImpulse);
        
                if (returnT >= 1)
                {
                    Destroy(this.gameObject);
                }
            }
        
            void UpdateSoundWaveSize(float size)
            {
                gameObject.transform.localScale = new Vector3(size, size, size);
            }
        
            public static float Remap(float inputValue, float fromMin, float fromMax, float toMin, float toMax)
            {
                float i = (((inputValue - fromMin) / (fromMax - fromMin)) * (toMax - toMin) + toMin);
                i = Mathf.Clamp(i, toMin, toMax);
                return i;
            }
        
            float tempImpulse = 0;
            float returnT = 0;
            float returnInterval;
            bool resettingSoundwave = false;
        
            public void Impulse(float strength, float returnInterval)
            {
                tempImpulse = strength;
                resettingSoundwave = true;
                this.returnInterval = returnInterval;
                returnT = 0;
        
                setup = true;
            }
        }
    '),
    new CodeSnippet("Creak", "Sticky Platform Class", "Class that sticks objects when entering collision, used when player steps on moving platform so they move with the platform", '
        using System.Collections;
        using System.Collections.Generic;
        using UnityEngine;
        
        public class StickyPlatform : MonoBehaviour
        {
            private void OnTriggerEnter(Collider other)
            {
                if (other.CompareTag("Player") || other.CompareTag("Moveable"))
                {
                    //Debug.Log("Collide with " + other.name);
        
                    other.transform.parent = transform;
                }
            }
        
            private void OnTriggerStay(Collider other)
            {
                if (other.CompareTag("Player") || other.CompareTag("Moveable"))
                {
                    //Debug.Log("Stay with " + other.name);
                    if (other.transform.parent == this.transform) return;
                    other.transform.parent = transform;
                }
            }
        
            private void OnTriggerExit(Collider other)
            {
                if (other.CompareTag("Player") || other.CompareTag("Moveable"))
                {
                    //Debug.Log("Stopped colliding with " + other.name);
        
                    other.transform.parent = null;
                }
            }
        }
    '),

    #endregion

    #region JavaJump Code

    new CodeSnippet("JavaJump", "Game Loop", "Code for the basic game loop", '
        let enableInput = true;
        
        $("#GameViewport").on("click", ()=>{
        if (!enableInput){return};
        if(!$("#GameViewport").hasClass("game-running"))
        {
        //If game has not started, start game
        $("#GameViewport").addClass("game-running");
        StartGame();
        }
        else
        {
        //If game has started, make character jump
        Jump();
        }
        })
        
        let board;
        let context;
        
        const tick = 10;
        
        function StartGame()
        {
            board = document.getElementById("Board");
            context = board.getContext("2d");
            
            score = 0;
            
            InitializeCharacter();
            
            I_update = setInterval(()=>{Update();}, tick);
            
            enemySpawnInterval = enemySpawnIntervalBase;
            I_spawn = setInterval(()=>{DecreaseSpawnInterval();}, enemySpawnIncreaseInterval);
            
            T_spawnIncrease = setTimeout(()=>{SpawnEnemy();}, enemySpawnInterval);
        }
        
        function Update()
        {
            //Clears board
            context.clearRect(0, 0, board.width, board.height);
            
            CharacterMovement();
            EnemyMovement();
            UpdateScore();
        }
        
        let I_update;
        let I_spawn;
        let T_spawnIncrease;
        
        function GameOver()
        {
            clearInterval(I_update);
            clearInterval(I_spawn);
            
            clearTimeout(T_spawnIncrease);
            
            //Clears all enemies
            enemies.length = 0;
            
            //Clears board
            context.clearRect(0, 0, board.width, board.height);
            
            $("#GameViewport").removeClass("game-running");
            
            DisableInput();
            
            $(".gameTitle").html("
            <h3>You got hit</h3>
            <h3>Score: ${score}</h3>
            <h3>Click or Tap to Play Again</h3>
            ");
        }
    '),
    new CodeSnippet("JavaJump", "Player", "Code for player", '
        const character = {
            x: 0,
            y: 40,
            size : 10,
            speed: 25,
            target: 0
        }
        
        function InitializeCharacter()
        {
            character.x = 0;
            character.y = board.height - character.y;
            character.target = 0;
        }

        function Jump()
        {
            //Can only jump if character position is at either end of the board
            const canJump = character.x === 0 || character.x === board.width - character.size;
            if (!canJump)
            {
                return;
            }

            character.target = character.x === 0 ? board.width - character.size : 0;
        }

        function CharacterMovement()
        {
            //If character is not already at the jump target
            if (character.x != character.target)
            {
                let movement = character.speed;
                if (character.target < character.x)
                {
                    //Reverses speed if jump target is left of character
                    movement *= -1;
                }

                //Clamps the value so character cannot move off the board
                character.x = Clamp(character.x + movement, 0, board.width - character.size);
            }

            //Draw character as green box
            context.fillStyle="green";
            context.fillRect(character.x, character.y, character.size, character.size);
        }
    '),
    new CodeSnippet("JavaJump", "Enemies", "Code for enemies", '
        const enemies = [];
        const enemySpawnIntervalBase = 3000;
        const enemySpawnIntervalMin = 500;
        const enemySpawnIncrease = 250;
        const enemySpawnIncreaseInterval = 5000;

        let enemySpawnInterval = enemySpawnIntervalBase;

        let enemyValues = {
            x: 0,
            y: 0,
            size : 15,
            speed: 1
        }

        function DecreaseSpawnInterval()
        {
            enemySpawnInterval = Clamp(enemySpawnInterval - enemySpawnIncrease, enemySpawnIntervalMin, enemySpawnIntervalBase);
        }

        function SpawnEnemy()
        {
            const spawnTrack = RandomRange(0, 3);
            const trackWidth = board.width/2;
            const spawnPos = spawnTrack * (trackWidth - (enemyValues.size/2));
            enemies.push([spawnPos, 0]);

            T_spawnIncrease = setTimeout(()=>{SpawnEnemy();}, enemySpawnInterval);
        }

        function EnemyMovement()
        {
            let enemiesToRemove = 0;
            for(let i = 0; i < enemies.length; i++)
            {
                let movement = enemyValues.speed;
                if (enemies[i][1] > board.height)
                {
                    //Removes enemies that fall offscreen
                    enemiesToRemove ++;
                }

                //Clamps the value so character cannot move off the board
                enemies[i][1] = Clamp(enemies[i][1] + movement, 0, board.width - enemyValues.size);
                
                //Draw enemies as red boxes
                context.fillStyle="red";
                context.fillRect(enemies[i][0], enemies[i][1], enemyValues.size, enemyValues.size);

                //Check collisions with player
                CheckCollisions(i);
            }

            for(let i = 0; i < enemiesToRemove; i++)
            {
                //Removes enemies that fall offscreen
                enemies.shift();
            }
        }

        function CheckCollisions(i)
        {
            let enemy = {
                x: enemies[i][0],
                y: enemies[i][1],
                size : enemyValues.size,
            }

            if (DetectCollision(character, enemy))
            {
                GameOver();
            }
        }

        function DetectCollision(a, b)
        {
            let xIntersects = a.x < b.x + b.size &&
                                a.x + a.size > b.x;
                                
            let yIntersects = a.y < b.y + b.size &&
                                a.y + a.size > b.y;

            return  xIntersects && yIntersects;
        }
    '),
    new CodeSnippet("JavaJump", "Score and Helper Functions", "Code for other functions", '
        let score = 0;

        function UpdateScore()
        {
            score++;

            context.fillStyle="black";
            context.font="10px courier";
            context.fillText(score, 15, board.height - 10);
        }

        /** Clamps a value in between given range
        * 
        * @param {*} value - Value to clamp
        * @param {*} min - Minimum possible value
        * @param {*} max - Maximum possible value
        * @returns 
        */
        function Clamp(value, min, max)
        {
            if (value > max){return max;}
            else if (value < min){return min;}
            else {return value;}
        }

        /** Random Range Function
        * @param {int} minRaw - Minimum value
        * @param {int} maxRaw - Maximum value (exclusive)
        * @returns {int} A random integer between the input values
        */
        function RandomRange(minRaw = 0, maxRaw = 0)
        {
            var min = parseInt(minRaw);
            var max = parseInt(maxRaw);
            
            var range = parseInt(max) - parseInt(min);
            var result = Math.floor(Math.random() * range) + parseInt(min);
            return result;
        }
    '),

    #endregion

    #region Netmatters Homepage Code

    new CodeSnippet("Netmatters Homepage", "Cookies", "Code for the cookies popup", '
        /** Checks whether the Cookies Popup menu should appear
         * 
         * @returns {bool} Boolean value of whether cookies popup should appear
         */
        function CheckCookiesData()
        {
            if (!document.cookie.toString().includes("cookiesAccepted=true"))
            {
                OpenCookies();
                return true;
            }
            else
            {
                console.log("Cookies data is " + document.cookie);
                return false;
            }
        }
        
        /**Opens Cookies Popup */
        function OpenCookies()
        {
            console.log("Opening Cookies Popup, data is " + document.cookie);
        
            $("body").addClass("stop-scrolling");
            $("#CookiesPopup").show();
        }
        
        //Add click event to accept cookies button
        $("#AcceptCookies").on("click", ()=>{
            CloseCookies();
        });
        
        /**Closes Cookies Popup */
        function CloseCookies()
        {
            //Send cookies closed via AJAX
            console.log("Closing Cookies Popup");
            SetCookiesData(true);
        
            $("body").removeClass("stop-scrolling");
            $("#CookiesPopup").hide();
        
            console.log("Cookies data is " + document.cookie);
        }
        
        /** Sets Cookies Accepted Value
         * 
         * @param {bool} value Boolean value for if the cookies have been accepted
         * 
         * @returns {string} String value representing the new cookies data
         */
        function SetCookiesData(value)
        {
            document.cookie = `cookiesAccepted=${value}`;
            return document.cookie;
        }
        
        /** Deletes all cookies generated
         *  || Not called here, intended to be used in console
         */
        function DeleteAllCookies()
        {
            const cookies = document.cookie.split(";");
        
            for (let i = 0; i < cookies.length; i++) {
                const cookie = cookies[i];
                const eqPos = cookie.indexOf("=");
                const name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
        
                //Sets expiry date in past so it will be deleted
                document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
            }
        }
    '),
    new CodeSnippet("Netmatters Homepage", "Sticky Header", "Code for the sticky header", '
        const navThreshold = 250;

        let prevScroll = 0;
        let stickyHeaderActive = true;
        
        let scrollUpTimeout;
        
        //Adds CheckScroll to scroll event
        $(".maincontent-inner").on("scroll", CheckScroll);
        
        //Determines whether header should be sticky when scrolling
        function CheckScroll(event)
        {
            let scroll = $(".maincontent-inner").scrollTop();
        
            //Checks if scroll direction was up or down
            if (scroll > prevScroll)
            {
                //Show header
                console.log("scroll down");
        
                if (scroll > navThreshold)
                {
                    if (stickyHeaderActive)
                    {
                        stickyHeaderActive = false;
                        AnimateHeader(false, 1.3);
            
                        scrollUpTimeout = setTimeout(() => {
                            $(".sticky-header").removeClass("sticky");
                        }, 500);
                    }
                }
                else
                {
                    $(".sticky-header").removeClass("sticky");
                }
            }
            else
            {
                //Hide header
                console.log("scroll up");
        
                if (scroll > navThreshold)
                {
                    if (!stickyHeaderActive)
                    {
                        stickyHeaderActive = true;
                        clearTimeout(scrollUpTimeout);
        
                        $(".sticky-header").addClass("sticky");
                        AnimateHeader(true, 0.6);
                    }
                }
                else
                {
                    $(".sticky-header").removeClass("sticky");
                }
            }
        
            prevScroll = scroll;
        }
        
        //Animates the header so it slides up or down
        function AnimateHeader(down, transitionTime)
        {
            from = "0";
            to = "-100%";
            if (down)
            {
                from = $(".sticky-header").css("top");
                to = "0";
            }
        
            $(".sticky-header").css("transition", "all 0s");
            $(".sticky-header").css("top", from);
        
            setTimeout(() => {
                $(".sticky-header").css("transition", `all ${transitionTime}s`);
                $(".sticky-header").css("top", to);
            }, 200);
        }
    '),
    
    #endregion

    #region Random Image Generator Code

    new CodeSnippet("Random Image Generator", "Image Generation", "", '
        $(document).ready(()=>{
            GenerateImage();
        })
        
        let currentSrc;
        let count = 0;
        
        const imgWidth = 500;
        const imgHeight = 300;
        
        $(".btn-generate").on("click", (event)=>{
            GenerateImage();
        })
        
        let canGenerate = true;
        
        function GenerateImage()
        {
            if (!canGenerate)
            {
                return;
            }
        
            canGenerate = false;
        
            fetch(`https://picsum.photos/${imgWidth}/${imgHeight}`)
                .then(response => CheckStatus(response))
                .then(imgSrc => SetContainerSrc(imgSrc))
                .catch(error => {
                    // Only in development
                    // console.error("An Error Occured: ", error.message);
                })
                .finally(()=>{canGenerate = true});
        }
        
        function CheckStatus(response)
        {
            if (response.ok)
            {
                Promise.resolve(response);
                return response.url;
            }
            else
            {
                Promise.reject(new Error(response.statusText));
            }
        }
        
        function SetContainerSrc(imgSRC)
        {
            $("#GeneratedImage-Container").html(`
                <img class="generated-img" src="${imgSRC}">
            `);
        
            currentSrc = imgSRC;
        }
    '),
    new CodeSnippet("Random Image Generator", "Drop List", "", '
        function AddToDropLists(newEmail)
        {
            AddToShowCollectionDropList(newEmail);
            AddToAddDropList(newEmail);
        }
        
        function AddToShowCollectionDropList(newEmail)
        {
            let optionsHTML = $("#DropList").children("optgroup").html();
        
            optionsHTML += `
                <option class="option" value="${newEmail}">${newEmail}</option>
                `;
        
            $("#DropList").children("optgroup").html(optionsHTML);
        
            GetSelectedItem();
        
            let emailIndex = GetEmailIndex(newEmail);
        
            SmoothScrollToID(`#EMAIL_${emailIndex}`)
        }
        
        function AddToAddDropList(newEmail)
        {
            let optionsHTML = $("#AddList").html();
        
            optionsHTML += `
                <option class="option" value="${newEmail}">${newEmail}</option>
                `;
        
            $("#AddList").html(optionsHTML);
        }
        
        $("#DropList").change((event)=>{
            GetSelectedItem();
        })
        
        function GetSelectedItem()
        {
            let currentlySelected = $("#DropList").val();
            ShowCollection(currentlySelected);
        
            let emailIndex = GetEmailIndex(currentlySelected);
        
            emailIndex = emailIndex == false ? 0 : emailIndex;
        
            SmoothScrollToID(`#EMAIL_${emailIndex}`)
        
            return currentlySelected;
        }
        
        function ForceSelectItem(email)
        {
            document.getElementById("DropList").value=email;
        }
        
        $("select").on("click", (event)=>{
            $(event.target).toggleClass("open");
        })
        
        $("select").on("blur", (event)=>{
            $(event.target).removeClass("open");
        })
        
        $(document).keyup(function(e) {
            if (e.keyCode == 27) { 
                $("select").removeClass("open");
            }
        });
        
        $(window).bind("mousewheel DOMMouseScroll", function (event)
        {
            $("select").removeClass("open");
        });
    '),
    new CodeSnippet("Random Image Generator", "Collection", "", '
        const collection = []; //TODO: Basic collection, need to assign to profiles

        function AddToCollection(email)
        {
            let emailIndex = GetEmailIndex(email);
            if (emailIndex === false)
            {
                //Email is not in use, add new email then add to collection
                let newUser = {
                    user_email: email,
                    user_images: []
                }
        
                newUser.user_images.push(currentSrc);
                collection.push(newUser);
        
                AddToDropLists(email);
            }
            else if (!collection[emailIndex].user_images.includes(currentSrc))
            {
                //Email is in use, add to array
                collection[emailIndex].user_images.push(currentSrc);
            }
            else
            {
                alert("Image has been added to that email already. \n\nPlease generate a new image or add it to a different email address.");
                return false;
            }
        
            count++;
        }
        
        function GetEmailIndex(email)
        {
            if (email === "")
            {
                return false;
            }
        
            for (let i = 0; i < collection.length; i++)
            {
                if (collection[i].user_email === email)
                {
                    return i;
                }
            }
        
            return false;
        }
        
        function GetEmailFromIndex(index)
        {
            if (index > collection.length || index < 0)
            {
                return false;
            }
        
            return collection[index].user_email;
        }
        
        let currentCollection = false;
        
        function ShowCollection(email="")
        {
            let imageSrcHTML = ``;
            
            emailIndex = GetEmailIndex(email);
        
            //If email is not specified or invalid, show entire collection
            if (emailIndex === false)
            {
                for (let i = 0; i < collection.length; i++)
                {
                    imageSrcHTML += GetEmailHTML(i);
                }
        
                currentCollection = false;
            }
            else //Runs if email is valid
            {
                imageSrcHTML += GetEmailHTML(emailIndex);
                currentCollection = emailIndex;
            }
        
            $("#GeneratedImages-Collection").html(imageSrcHTML);
        }
        
        function GetEmailHTML(index)
        {
            let imageSrcHTML = `
                <h2>Email: ${collection[index].user_email}</h2>
                <div id="EMAIL_${index}" class="generatedImages-Collection">`;
        
            for (let i = 0; i < collection[index].user_images.length; i++)
            {
                imageSrcHTML += `
                <div class="collection-img-container">
                <img class="generated-img" src="${collection[index].user_images[i]}">
                </div>`;
            }
        
            imageSrcHTML += "</div>"
        
            return imageSrcHTML;
        }

        //Quick add to collection
        $(".btn-add").on("click", (event)=>{
            event.preventDefault();
        
            var email = document.getElementById("AddList").value;
        
            if (email !== false)
            {
                OnSubmitEmail(email);
            }
        })
    '),
    new CodeSnippet("Random Image Generator", "Form Validation", "", '
        $(".form-sbmt").on("click", (event)=>{
            CheckFormFields(event);
        })
        
        $("input").on("keypress", (event)=>{
            if (event.which == 13)
            {
                CheckFormFields(event);
            }
        })
        
        function CheckFormFields(event)
        {
            event.preventDefault();
        
            if (!canGenerate)
            {
                return;
            }
        
            let canSubmit = true;
            let emailString = $("#email").val();
            let message = GetEmailMessage(emailString);
        
            if(message !== "")
            {
                canSubmit = false;
            }
        
            if (canSubmit)
            {
                OnSubmitEmail(emailString);
            }
            else
            {
                alert(message);
            }
        }
        
        const emailChecks =
        [
            //Does not end on .
            {
                message: "'.' is used at the wrong position in the email address",
                regexCheck: [/\.$/, /@+\./],
                required: false
            },
        
            //Text after @
            {
                message: "Please enter some text after the \'@\' in the email address",
                regexCheck: [/@+\S/],
                required: true
            },
        
            //Text before @
            {
                message: "Please enter some text before the \'@\' in the email address",
                regexCheck: [/\S+@/],
                required: true
            },
        
            //Includes @
            {
                message: "Please include an \'@\' in the email address",
                regexCheck: [/@/],
                required: true
            },
        
            //Does not include special characters eg. [ ] ( ) , ; : < > | or = 
            {
                message: "Please do not include and special characters in the email address eg. [ ] ( ) , ; : < > | or = ",
                regexCheck: [/[,:;=|\[\]<>()]/],
                required: false
            },
        
            //Does not include spaces
            {
                message: "Please do not include any spaces in the email address",
                regexCheck: [/\s/],
                required: false
            }
        ]
        
        function GetEmailMessage(input)
        {
            message = "";
        
            for (let i= 0; i < emailChecks.length; i++)
            {
                let success = true;
        
                for (let j = 0; j < emailChecks[i].regexCheck.length; j++)
                {
                    let match = input.match(emailChecks[i].regexCheck[j]) ? true : false;
                    match = match == emailChecks[i].required;
        
                    if (match == false)
                    {
                        success = false;
                    }
                }
        
                if (!success)
                {
                    //alert(emailChecks[i].message);
                    message = emailChecks[i].message;
                }
            }
        
            if (input === "")
            {
                message = "Please include an email address";
            }
            
            return message;
        }
        
        function OnSubmitEmail(email)
        {
            AddToCollection(email);
        
            show = email;
            emailIndex = GetEmailIndex(email);
        
            //If email address to assign is already being shown, do not need to filter
            if (currentCollection === false && currentCollection !== emailIndex)
            {
                show = "";
            }
            
            ShowCollection(show);
        
            ForceSelectItem(show);
        }
    '),
    
    #endregion

    #region VFX Code

    new CodeSnippet("Visual FX Programming", "Generate Plane Mesh Class", "Code that generates a mesh plane using vertices, and can also apply a sine wave effect to create a basic water effect", '
        using System.Collections;
        using System.Collections.Generic;
        using UnityEngine;
        
        [RequireComponent(typeof(MeshFilter))]
        public class GeneratePlaneMesh : MonoBehaviour
        {
            #region Mesh Generation
        
            [Header("Mesh Generation")]
            public Transform parentTransform;
            public int xSize = 10;
            public int zSize = 10;
        
            Mesh mesh;
        
            Vector3[] verts;
            int[] tris;
        
            MeshFilter meshFilter;
            MeshCollider meshCollider;
        
            float minTerrainHeight, maxTerrainHeight;
        
            #endregion
        
            #region Waves
        
            [Header("Waves")]
            public float sineWaveCount;
            public float waveSpeed = 1;
            public float waveHeightMin, waveHeightMax;
        
            #endregion
        
            #region Material
        
            [Header("Material")]
            public Gradient gradient;
        
            Vector2[] uvs;
        
            Color[] colours;
        
        
            #endregion
        
            #region Mesh Collision
            [Header("Mesh Collision")]
            public bool collide;
        
            #endregion
        
            // Start is called before the first frame update
            void Start()
            {
                //Assigns all of the mesh components
                mesh = new Mesh();
                meshFilter = GetComponent<MeshFilter>();
                meshCollider = GetComponent<MeshCollider>();
        
                if (meshFilter != null)
                {
                    meshFilter.mesh = mesh;
                }
        
                if (meshCollider != null)
                {
                    meshCollider.sharedMesh = mesh;
                }
        
                CreateQuad();
        
                ResetTransform();
            }
        
            private void Update()
            {
                UpdateMesh();
            }
        
            void CreateQuad()
            {
                /*
                Sources:
                Mesh Generation in Unity - https://www.youtube.com/watch?v=eJEpeUH1EMg
                Procedural Terrain in Unity - https://www.youtube.com/watch?v=64NblGkAabk
                */
        
                //Generates the vertices based on the z and x size of plane
                //Loops through all of the vetices and creates a vertex for each point, offsetting them to the transform of the parent object
                #region Vertices
        
                verts = new Vector3[(xSize + 1) * (zSize + 1)];
        
                for (int z = 0, i = 0; z <= zSize; z++)
                {
                    for (int x = 0; x <= xSize; x++)
                    {
                        Vector3 offset = new Vector3();
                        offset.x = this.gameObject.transform.position.x;
                        offset.y = this.gameObject.transform.position.y;
                        offset.z = this.gameObject.transform.position.z;
        
                        verts[i] = new Vector3(x + offset.x, 0 + offset.y, z + offset.z);
                        i++;
                    }
                }
        
                #endregion
        
                //Loops through all of the vertices and draws triangles based on the vertices
                #region Triangles
        
                tris = new int[xSize * zSize * 6];
        
                int vertCount = 0;
                int triCount = 0;
        
                for (int z = 0; z < zSize; z++)
                {
                    for (int x = 0; x < xSize; x++)
                    {
                        tris[triCount + 0] = vertCount;
                        tris[triCount + 1] = vertCount + 1 + xSize;
                        tris[triCount + 2] = vertCount + 1;
                        tris[triCount + 3] = vertCount + 1;
                        tris[triCount + 4] = vertCount + 1 + xSize;
                        tris[triCount + 5] = vertCount + 2 + xSize;
        
                        vertCount++;
                        triCount += 6;
                    }
        
                    vertCount++;
                }
        
                #endregion
        
                //Assigns the UV coordinates for the surface, enabling the shader animations
                #region Material
        
                uvs = new Vector2[verts.Length];
        
                for (int i = 0, z = 0; z <= zSize; z++)
                {
                    for (int x = 0; x <= xSize; x++)
                    {
                        uvs[i] = new Vector2((float)x / xSize, (float)z / zSize);
                        i++;
                    }
                }
        
                #endregion
            }
        
            void UpdateMesh()
            {
                if (mesh != null)
                {
                    mesh.Clear();
        
                    //Adjusts the y position of the vertices and maps them onto a sin wave, which creates a liquid wave effect
                    for (int i = 0; i < verts.Length; i++)
                    {
                        verts[i].y = Remap(Mathf.Sin(waveSpeed * (sineWaveCount * i + Time.time)), 0, 1, waveHeightMin, waveHeightMax);
        
                        if (verts[i].y < minTerrainHeight)
                        {
                            minTerrainHeight = verts[i].y;
                        }
                        if (verts[i].y > maxTerrainHeight)
                        {
                            maxTerrainHeight = verts[i].y;
                        }
                    }
        
                    //Sets the values for the mesh to the vertices and triangles generated here
                    mesh.vertices = verts;
                    mesh.triangles = tris;
                    mesh.RecalculateBounds();
                    mesh.RecalculateNormals();
        
                    mesh.uv = uvs;
        
                    meshCollider.sharedMesh = mesh;
                    meshCollider.sharedMesh.RecalculateBounds();
                    meshCollider.sharedMesh.RecalculateNormals();
        
                    //Loops through the vertices and dynamically adjusts the colours based on the height of the vertex
                    colours = new Color[verts.Length];
        
                    for (int i = 0, z = 0; z <= zSize; z++)
                    {
                        for (int x = 0; x <= xSize; x++)
                        {
                            float height = Remap(verts[i].y, minTerrainHeight, maxTerrainHeight, 0, 1);
                            colours[i] = gradient.Evaluate(height);
                            i++;
                        }
                    }
        
                    mesh.colors = colours;
                }
            }
        
            #region Helper Functions
        
            private void OnDrawGizmosSelected()
            {
                if (verts != null)
                {
                    for (int i = 0; i < verts.Length; i++)
                    {
                        Gizmos.DrawSphere(verts[i], 0.1f);
                    }
                }
            }
        
            //Resets the trasnform of the mesh to the parent transform
            private void ResetTransform()
            {
                float y = this.gameObject.transform.position.y;
        
                parentTransform.position = new Vector3(0, y, 0);
            }
        
            //Remaps a value from one range to another
            private float Remap(float value, float inMin, float inMax, float outMin, float outMax)
            {
                //https://docs.unity3d.com/Packages/com.unity.shadergraph@6.9/manual/Remap-Node.html
                return outMin + (value - inMin) * (outMax - outMin) / (inMax - inMin);
            }
        
            #endregion
        }
    '),
    new CodeSnippet("Visual FX Programming", "Sword Trail Class", "Class that generates a sword using vertices, uses a quatratic lerp function to smoothly align vertices", '
        using System.Collections;
        using System.Collections.Generic;
        using UnityEngine;
        
        [RequireComponent(typeof(MeshFilter))]
        public class SwordTrail : MonoBehaviour
        {
            #region Mesh Generation
        
            [Header("Transforms")]
            public Transform parentTransform;
            public GameObject player;
            public GameObject swordBase;
            public GameObject swordPoint;
            public GameObject trailPoint;
            public GameObject desiredTrailPoint;
            public float lerpSpeed = 0.5f;
        
            private Vector3 offSet = new Vector3(17.6f, 14.0f, 23.8f);
        
            [Header("Mesh Generation")]
            [Range(3, 10)]
            public int vertexCount; //Needs to be an odd number greater than or equal to 3
        
            Mesh mesh;
        
            Vector3[] verts;
            int[] tris;
        
            MeshFilter meshFilter;
            MeshCollider meshCollider;
        
            #endregion
        
            #region Material
        
            [Header("Material")]
            public Gradient gradient;
        
            Vector2[] uvs;
            public float uvScale = 1f;
        
            Color[] colours;
        
            #endregion
        
            // Start is called before the first frame update
            void Start()
            {
                //Assigns all of the mesh components
                mesh = new Mesh();
                meshFilter = GetComponent<MeshFilter>();
                meshCollider = GetComponent<MeshCollider>();
        
                if (meshFilter != null)
                {
                    meshFilter.mesh = mesh;
                }
        
                if (meshCollider != null)
                {
                    meshCollider.sharedMesh = mesh;
                }
        
                CreateQuad();
                UpdateMesh();
            }
        
            private void Update()
            {
                CreateQuad();
                UpdateMesh();
            }
        
            void CreateQuad()
            {
                //Uses a lerp function to move a trail point towards the point of the sword
                #region Trail Point
                Vector3 newPos = LinearLerp(trailPoint.transform.position, desiredTrailPoint.transform.position, Time.deltaTime * lerpSpeed);
        
                trailPoint.transform.position = newPos;
        
                #endregion
        
                //Generates the vertices based on the vertex count
                //Loops through all of the vetices and assigns their position based on a quadtratic lerp between the base of the sword and the point of the sword
                //This creates a smooth curve trail behind the blade
                #region Vertices
        
                verts = new Vector3[vertexCount];
        
                for (int i = 0; i < vertexCount; i++)
                {
                    verts[i] = QuadraticLerp(
                        swordBase.transform.position,
                        
                        swordPoint.transform.position,
                        trailPoint.transform.position,
                        Remap(i, 0, vertexCount - 1, 0, 1));
                }
        
                #endregion
        
                //Loops through all of the vertices and draws triangles based on the vertices
                #region Triangles
        
                tris = new int[vertexCount * 3];
        
                for (int t = 0, v = 0; t < vertexCount + 3; t+=3, v++)
                {
                    tris[t] = v;
                    tris[t + 1] = v + 1;
                    tris[t + 2] = vertexCount - 1;
                }
        
                #endregion
        
                //Assigns the UV coordinates for the surface, enabling the shader animations
                #region Material
        
                uvs = new Vector2[verts.Length];
        
                for (int i = 0; i <= vertexCount; i++)
                {
                    //Issue with even numbers
                    uvs[i] = new Vector2((float)i / vertexCount, uvScale);
                    i++;
                }
                #endregion
            }
        
            void UpdateMesh()
            {
                if (mesh != null)
                {
                    mesh.Clear();
        
                    //Sets the values for the mesh to the vertices and triangles generated here
                    mesh.vertices = verts;
                    mesh.triangles = tris;
                    mesh.RecalculateBounds();
                    mesh.RecalculateNormals();
        
                    mesh.uv = uvs;
        
                    //Loops through the vertices and dynamically adjusts the colours based on the distance from the blade
                    //The closer the trail to the blade, the more opaque it is
                    colours = new Color[verts.Length];
        
                    for (int i = 0; i < vertexCount; i++)
                    {
                        float distance = Vector3.Magnitude(swordPoint.transform.position - verts[i]);
                        distance = Remap(distance, 0, 2.5f, 0, 1);
        
                        colours[i].a = Mathf.Clamp(gradient.Evaluate(distance).a, 0, 1);
                    }
        
                    mesh.colors = colours;
                }
            }
        
            #region Helper functions
        
            private void OnDrawGizmosSelected()
            {
                if (verts != null)
                {
                    for (int i = 0; i < verts.Length; i++)
                    {
                        Gizmos.DrawSphere(verts[i], 0.1f);
                    }
                }
            }
        
            //Resets the trasnform of the mesh such that is aligns with the sword
            private void ResetTransform()
            {
                transform.position = new Vector3(17.6f, 14.0f, 23.8f);
                transform.eulerAngles = new Vector3(0, 0, 180);
                transform.localScale = new Vector3(0, 0, 0);
            }
        
            //Remaps a value from one range to another
            private float Remap(float value, float inMin, float inMax, float outMin, float outMax)
            {
                //https://docs.unity3d.com/Packages/com.unity.shadergraph@6.9/manual/Remap-Node.html
                return outMin + (value - inMin) * (outMax - outMin) / (inMax - inMin);
            }
        
            //Linear and Quadratic lerp functions, from worksheet 1
        
            //This function lerps between two vectors by lerping the two x, y and z values
            private Vector3 LinearLerp(Vector3 v0, Vector3 v1, float lerpPoint)
            {
                return new Vector3(Mathf.Lerp(v0.x, v1.x, lerpPoint), Mathf.Lerp(v0.y, v1.y, lerpPoint), Mathf.Lerp(v0.z, v1.z, lerpPoint));
            }
        
            //This function performs a quadratic lerp between three vectors, utilizing the linear lerp to combine them
            private Vector3 QuadraticLerp(Vector3 v0, Vector3 v1, Vector3 v2, float lerpPoint)
            {
                Vector3 l0Point = LinearLerp(v0, v1, lerpPoint);
                Vector3 l1Point = LinearLerp(v1, v2, lerpPoint);
        
                Vector3 q0 = LinearLerp(l0Point, l1Point, lerpPoint);
        
                return q0;
            }
        
            #endregion
        } 
    ')

    #endregion
];

#endregion

#region Functions

function GetTableEntryCount($table)
{
    global $db;

    if($db == null)
    {
        echo "No database was found";
        return false;
    }

    $sql = "SELECT COUNT(*) AS count FROM " . $table;
        
    try
    {
        $results = $db->query($sql);
    }
    catch (Exception $e)
    {
        echo "Error!: " . $e->getMessage() . "<br />";
        return false;
    }
    
    $count = ($results->fetch(PDO::FETCH_ASSOC));
    return $count;
}

function AddProject($newProject)
{
    global $db;

    if($db == null)
    {
        echo "No database was found";
        return false;
    }

    $sql = "INSERT INTO projects(title, type, featured, available, shortDescription, longDescription, thumbnailSrc, videoLink, viewLink, viewMessage, repoLink, codeDescription) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        
    try
    {
        $results = $db->prepare($sql);
        $results->bindValue(1, $newProject->title, PDO::PARAM_STR);
        $results->bindValue(2, $newProject->type, PDO::PARAM_STR);
        $results->bindValue(3, $newProject->featured, PDO::PARAM_STR);
        $results->bindValue(4, $newProject->available, PDO::PARAM_STR);
        $results->bindValue(5, $newProject->shortDescription, PDO::PARAM_STR);
        $results->bindValue(6, $newProject->longDescription, PDO::PARAM_STR);
        $results->bindValue(7, $newProject->thumbnailSrc, PDO::PARAM_STR);
        $results->bindValue(8, $newProject->videoLink, PDO::PARAM_STR);
        $results->bindValue(9, $newProject->viewLink, PDO::PARAM_STR);
        $results->bindValue(10, $newProject->viewMessage, PDO::PARAM_STR);
        $results->bindValue(11, $newProject->repoLink, PDO::PARAM_STR);
        $results->bindValue(12, $newProject->codeDescription, PDO::PARAM_STR);
        $results->execute();
    }
    catch (Exception $e)
    {
        echo "Error!: " . $e->getMessage() . "<br />";
        return false;
    }
    
    return true;
}

function AddCodeSnippet($newCodeSnippet)
{
    global $db;

    if($db == null)
    {
        echo "No database was found";
        return false;
    }

    $sql = "INSERT INTO codesnippets(projectId, name, description, code) VALUES(?, ?, ?, ?);";
        
    try
    {
        $results = $db->prepare($sql);
        $results->bindValue(1, $newCodeSnippet->projectId, PDO::PARAM_STR);
        $results->bindValue(2, $newCodeSnippet->name, PDO::PARAM_STR);
        $results->bindValue(3, $newCodeSnippet->description, PDO::PARAM_STR);
        $results->bindValue(4, htmlspecialchars($newCodeSnippet->code), PDO::PARAM_STR);
        $results->execute();
    }
    catch (Exception $e)
    {
        echo "Error!: " . $e->getMessage() . "<br />";
        return false;
    }
    
    return true;
}

function UpdateCodeSnippet($codeSnippet, $newId)
{
    global $db;

    if($db == null)
    {
        echo "No database was found";
        return false;
    }

    $sql = "UPDATE codesnippets SET projectId = ? WHERE id = " . $codeSnippet["id"];
        
    try
    {
        $results = $db->prepare($sql);
        $results->bindValue(1, $newId, PDO::PARAM_STR);
        $results->execute();
    }
    catch (Exception $e)
    {
        echo "Error!: " . $e->getMessage() . "<br />";
        return false;
    }
    
    return true;
}

function ConvertNamesToID()
{
    global $initialCodeSnippets;
    foreach($initialCodeSnippets as $item)
    {
        $item->projectId = GetProjectByName($item->projectId)["id"];
    }
}

function TrySeedDatabases()
{
    $projectsCount = GetTableEntryCount("projects");

    if ($projectsCount["count"] === 0)
    {
        SeedProjectsDatabase();
    }

    ConvertNamesToID();

    $codeSnippetsCount = GetTableEntryCount("codeSnippets");

    if ($codeSnippetsCount["count"] === 0)
    {
        SeedCodeSnippetsDatabase();
    }
    else
    {
        UpdateCodeSnippetsDatabase();
    }
}

function SeedProjectsDatabase()
{
    global $initialProjects;
    foreach ($initialProjects as $item)
    {
        AddProject($item);
    }
}

function SeedCodeSnippetsDatabase()
{
    global $initialCodeSnippets;
    foreach ($initialCodeSnippets as $item)
    {
        AddCodeSnippet($item);
    }
}

function UpdateCodeSnippetsDatabase()
{
    global $initialCodeSnippets;
    $codeSnippets = GetCodeSnippetsList();
    foreach ($codeSnippets as $key => $item)
    {
        UpdateCodeSnippet($item, $initialCodeSnippets[$key]->projectId);
    }
}

#endregion

TrySeedDatabases();